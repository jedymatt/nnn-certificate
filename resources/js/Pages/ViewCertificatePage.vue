<script setup>
import generateCertificate from '@/lib/certificate';
import moment from 'moment';
import QRCode from 'qrcode';
import Header from "@/Layouts/Header";


const props = defineProps({
    certificate: Object,
});

const downloadPdf = async () => {
    const displayName = props.certificate.display_name;

    const issueDate = moment(props.certificate.issue_date);

    const issueDateString = issueDate.format('Do [day of] MMMM[,] YYYY');

    const november = issueDate < moment().month(10) ? moment().month(10).subtract(1, 'year') : moment().month(10);

    const novemberStartString = november.date(1).format('MMMM D, YYYY');
    const novemberEndString = november.month(10).endOf('month').format('MMMM D, YYYY');

    const description = `As a NNN survivor during the conduct
    of No Nut November: Worldwide held on ${novemberStartString} to ${novemberEndString}.
    Given to this ${issueDateString}.`;

    const validationLink = route('certificate.verify.result', {
        certificate: props.certificate,
    });

    const qrCode = await QRCode.toDataURL(validationLink, {
        type: 'image/png',
        width: 128.5,
    });

    const pdf = generateCertificate({
        displayName: displayName.toUpperCase(),
        description,
        qrCode,
        validationKey: props.certificate.validation_key,
    });

    pdf.save('nnn_certificate_' + slugify(displayName, '_') + '.pdf');
}

const slugify = (str, separator = '-') =>
    str
        .toLowerCase()
        .trim()
        .replace(/[^\w\s-]/g, '')
        .replace(/[\s_-]+/g, separator)
        .replace(/^-+|-+$/g, '');
</script>
<template>
    <Header title="View Certificate"/>
    <main class="flex items-center justify-center py-12 min-h-screen px-4">
        <div class="max-w-3xl flex flex-col items-center space-y-4">
            <div class="relative group shadow-md border rounded-md overflow-clip">
                <div class="relative">
                    <img class="blur-sm group-hover:blur-none h-48 object-cover hover:blur-sm"
                         src="/images/certificate_example.png"
                         alt="Example">
                </div>
                <div
                    class="group-hover:opacity-0 absolute top-0 h-full w-full flex items-center justify-center font-medium text-xl">
                    Example
                </div>
            </div>
            <button
                class="form-btn"
                @click="downloadPdf">
                Download Certificate as PDF
            </button>

        </div>
    </main>
</template>

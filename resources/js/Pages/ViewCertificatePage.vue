<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import generateCertificate from '@/lib/certificate';
import moment from 'moment';
import QRCode from 'qrcode';


const props = defineProps({
    certificate: Object,
});

const downloadPdf = async () => {
    const displayName = props.certificate.display_name;

    const novemberStart = moment().month(10).date(1).format('MMMM D, YYYY');
    const novemberEnd = moment().month(10).endOf('month').format('MMMM D, YYYY');
    const issueDate = moment(props.certificate.issue_date).format('Do [day of] MMMM[,] YYYY');

    const description = `As a NNN survivor during the conduct
    of No Nut November: Worldwide held on ${novemberStart} to ${novemberEnd}.
    Given to this ${issueDate}.`;

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

    pdf.save('certificate_' + slugify(displayName, '_') + '.pdf');
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

    <Head>
        <title>View Certificate</title>
    </Head>

    <div class="py-12 px-6">
        <button
            class="px-4 py-2 border rounded-md text-sm font-medium bg-indigo-500 text-white hover:bg-indigo-700 focus:ring ring-indigo-200 outline-none"
            @click="downloadPdf">
            Download Certificate as PDF
        </button>
    </div>
</template>

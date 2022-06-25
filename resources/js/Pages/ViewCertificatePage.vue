<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import generateCertificate from '@/lib/certificate';
import moment from 'moment';
import QRCode from 'qrcode';


const props = defineProps({
    certificate: Object,
});

const downloadPdf = async () => {
    const name = props.certificate.name.toUpperCase();

    const novemberStart = moment().month(10).date(1).format('MMMM D, YYYY');
    const novemberEnd = moment().month(10).endOf('month').format('MMMM D, YYYY');
    const issueDate = moment(props.certificate.issue_date).format('Do [day of] MMMM[,] YYYY');

    const description = `As a NNN survivor during the conduct
    of No Nut November: Worldwide held on ${novemberStart} to ${novemberEnd}.
    Given to this ${issueDate}.`;

    const valiidationLink = route('verify-certificate.scanned', {
        certificate: props.certificate,
    });

    const qrCode = await QRCode.toDataURL(valiidationLink, {
        type: 'image/png',
        width: 128.5,
    });

    console.log(qrCode)

    const pdf = generateCertificate({
        name,
        description,
        qrCode,
        validationKey: props.certificate.validation_key,
    });

    pdf.save('certificate_' + name + '.pdf');
}
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

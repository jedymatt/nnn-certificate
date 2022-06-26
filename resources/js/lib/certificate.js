import { jsPDF } from 'jspdf'

export default function generateCertificate({ displayName, description, qrCode, validationKey }) {
    const doc = new jsPDF({
        orientation: 'landscape',
        unit: 'cm',
    });

    doc.addFont('/fonts/Vollkorn/Vollkorn-VariableFont_wght.ttf', 'Vollkorn', 'normal');
    doc.addFont('/fonts/Roboto/Roboto-Regular.ttf', 'Roboto', 'normal');

    doc.addImage('/images/certificate.png', 'PNG', 0, 0, 29.7, 21);

    doc.setFont('Vollkorn')
        .setFontSize(52)
        .text(displayName, 14.8, 10.22, {
            align: 'center',
        });

    doc.setFont('Roboto')
        .setFontSize(12)
        .text(description, 14.8, 12.0, {
            align: 'center',
            lineHeightFactor: 1.52,
        });


    doc.addImage(qrCode, 'PNG', 13.2, 15.0, 3.4, 3.4);

    doc.text(validationKey, 14.8, 19.0, {
        align: 'center',
    });

    return doc;
}

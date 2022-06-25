import { jsPDF } from 'jspdf'

export default function generateCertificate({ name, description }) {
    const doc = new jsPDF({
        orientation: 'landscape',
        unit: 'cm',
    });

    doc.html('<h1>Certificate of Completion</h1>')

    doc.addFont('/fonts/Vollkorn/Vollkorn-VariableFont_wght.ttf', 'Vollkorn', 'normal');
    doc.addFont('/fonts/Roboto/Roboto-Regular.ttf', 'Roboto', 'normal');

    doc.addImage('/images/certificate.png', 'PNG', 0, 0, 29.7, 21);

    doc.setFont('Vollkorn')
    doc.setFontSize(52);
    doc.text(name, 14.8, 10.22, {
        align: 'center',
    });

    const desc = 'Porta egestas nibh risus aliquet. Ultricies sed eget tortor sit mi aliquam facilisis justo.\n' +
        'Sollicitudin convallis odio dui feugiat leo gravida vestibulum. Viverra mi placerat quis eget\n' +
        'risus morbi non faucibus. Dignissim sed egestas adipiscing est montes, eget ac.';

    doc.setFont('Roboto')
    doc.setFontSize(12);
    doc.text(desc, 14.8, 12.0, {
        align: 'center',
        lineHeightFactor: 1.52,
    })

    doc.save('certificate.pdf');
}

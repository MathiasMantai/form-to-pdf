from fpdf import FPDF;
import sys;

# testVar = sys.argv[0];

pdf = FPDF();
pdf.add_page();
pdf.set_font('Arial', 'B', 16);
pdf.cell(40, 10, 'test');
pdf.output('test.pdf', 'F');

print('test');
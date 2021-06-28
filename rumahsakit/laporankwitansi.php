<?php
  include 'koneksi.php';
  include 'fpdf/fpdf.php';

  $pdf = new FPDF("L","cm","A4");
  $pdf->SetMargins(0.5,1,1);
  $pdf->AliasNbPages();
  $pdf->AddPage();
  $pdf->SetFont('Arial', 'B', '14');
  $pdf->Cell(25.5,0.7,"DATA KWITANSI",0,10,'C');
  $pdf->Line(1,3.1,28.5,3.1);
  $pdf->SetLineWidth(0.1);
  $pdf->Line(1,3.1,28.5,3.2);
  $pdf->SetLineWidth(0);
  $pdf->Ln(1);
  $pdf->Ln(1);
  $pdf->SetFont('Arial', 'B',9);
  $pdf->Cell(1,0.8,'NO',1,0,'C');
  $pdf->Cell(4,0.8,'ID ',1,0,'C');
  $pdf->Cell(4,0.8,'ID Barang',1,0,'C');
  $pdf->Cell(4.5,0.8,'ID Pelanggan',1,0,'C');
  $pdf->Cell(4.5,0.8,'Quantity',1,0,'C');
  $pdf->Cell(4.5,0.8,'Date',1,0,'C');
  $pdf->Cell(4.5,0.8,'Total',1,1,'C');
  $pdf->SetFont('Arial','',9);
  $no=1;
  $query=mysqli_query($koneksi, "SELECT * FROM tblkwitansi");
  while($lihat = mysqli_fetch_array($query)) {
    $pdf->Cell(1,0.8,$no,1,0,'C');
    $pdf->Cell(4,0.8,$lihat['idkwitansi'],1,0,'C');
    $pdf->Cell(4,0.8,$lihat['idbarang'],1,0,'C');
    $pdf->Cell(4.5,0.8,$lihat['idpelanggan'], 1,0,'C');
    $pdf->Cell(4.5,0.8,$lihat['quantity'],1,0,'C');
    $pdf->Cell(4.5,0.8,$lihat['date'],1,0,'C');
    $pdf->Cell(4.5,0.8,$lihat['total'],1,1,'C');
    $no++;
  }
  $pdf->Output("laporan_kwitansi.pdf", "I");
?>
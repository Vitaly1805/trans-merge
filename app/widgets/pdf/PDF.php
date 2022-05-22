<?php

namespace widgets\pdf;


use Mpdf\Mpdf;
use TCPDF;

class PDF
{
    protected object $fpdf;
    protected array $textColour = array( 0, 0, 0 );
    protected array $headerColour = array( 100, 100, 100 );
    protected array $tableHeaderTopTextColour = array( 255, 255, 255 );
    protected array $tableHeaderTopFillColour = array( 125, 152, 179 );
    protected array $tableHeaderTopProductTextColour = array( 0, 0, 0 );
    protected array $tableHeaderTopProductFillColour = array( 143, 173, 204 );
    protected array $tableHeaderLeftTextColour = array( 99, 42, 57 );
    protected array $tableHeaderLeftFillColour = array( 184, 207, 229 );
    protected array $tableBorderColour = array( 50, 50, 50 );
    protected array $tableRowFillColour = array( 213, 170, 170 );
    protected string $logoFile = "img\\logo.png";
    protected int $logoXPos = 10;
    protected int $logoYPos = 10;
    protected int $logoWidth = 30;
    protected array $columnLabels = array( "Q1", "Q2", "Q3", "Q4" );
    protected array $rowLabels = array( "SupaWidget", "WonderWidget", "MegaWidget", "HyperWidget" );
    protected int $chartXPos = 20;
    protected int $chartYPos = 250;
    protected int $chartWidth = 160;
    protected int $chartHeight = 80;
    protected string $chartXLabel = "Product";
    protected string $chartYLabel = "2009 Sales";
    protected int $chartYStep = 20000;
    protected array $chartColours = array(
        array( 255, 100, 100 ),
        array( 100, 255, 100 ),
        array( 100, 100, 255 ),
        array( 255, 255, 100 ),
    );
    protected array $data = array(
        array( 9940, 10100, 9490, 11730 ),
        array( 19310, 21140, 20560, 22590 ),
        array( 25110, 26260, 25210, 28370 ),
        array( 27650, 24550, 30040, 31980 ),
    );

    public function __construct()
    {
        $mpdf = new Mpdf();
        $mpdf->WriteHTML('<h1 style="color: red;">Привет</h1>');
        $mpdf->Output('Доверенность.pdf', 'D');
    }

    public function getNowDate() {
        $arr = [
            'января',
            'февраля',
            'марта',
            'апреля',
            'мая',
            'июня',
            'июля',
            'августа',
            'сентября',
            'октября',
            'ноября',
            'декабря'
        ];

        $month = date('n')-1;
        $date = date('d').' '.$arr[$month].' '.date('Y');
        return iconv('utf-8', 'windows-1251', $date);
    }
}
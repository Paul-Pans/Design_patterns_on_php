<?php
namespace AbstractFactoryV1;

class WinWriterFactory implements FactoryInterface{

   
    public function createReportExel(){

       return new WinExelWriter;
       
    }
    
    public function createReportXML(){

        return new WinXMLWriter;

    }


}
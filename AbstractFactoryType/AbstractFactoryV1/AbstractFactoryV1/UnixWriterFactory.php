<?php
namespace AbstractFactoryV1;

class UnixWriterFactory implements FactoryInterface{

   
    public function createReportExel(){

       return new UnixExelWriter;
       
    }
    
    public function createReportXML(){

        return new UnixXMLWriter;

    }


}
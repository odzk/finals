<?php

$title = $_POST['pageTitle'];
$header = $_POST['pageHead'];
$text_body = $_POST['pageText'];
$format = $_POST['submit'];

abstract class AbstractPageBuilder {
    abstract function getPage();
}

abstract class AbstractPageDirector {
    abstract function __construct(AbstractPageBuilder $builder_in, $pageTitle, $pageHeader, $pageText);
    abstract function buildPage($pageTitle, $pageHeader, $pageText);
    abstract function getPage();
}

class HTMLPage {
    private $page = NULL;
    private $page_title = NULL;
    private $page_heading = NULL;
    private $page_text = NULL;
    function __construct() {
    }
    function showPage() {
      return $this->page;
    }
    function setTitle($title_in) {
      $this->page_title = $title_in;
    }
    function setHeading($heading_in) {
      $this->page_heading = $heading_in;
    }
    function setText($text_in) {
      $this->page_text .= $text_in;
    }
    function formatPage() {
       $this->page  = '<html>';
       $this->page .= '<head><title>'.$this->page_title.'</title></head>';
       $this->page .= '<body>';
       $this->page .= '<h1>'.$this->page_heading.'</h1>';
       $this->page .= $this->page_text;
       $this->page .= '</body>';
       $this->page .= '</html>';
    }
}

class HTMLPageBuilder extends AbstractPageBuilder {
    private $page = NULL;
    function __construct() {
      $this->page = new HTMLPage();
    }

    function setTitle($title_in) {
      $this->page->setTitle($title_in);
    }
    function setHeading($heading_in) {
      $this->page->setHeading($heading_in);
    }
    function setText($text_in) {
      $this->page->setText($text_in);
    }
    function formatPage() {
      $this->page->formatPage();
    }
    function getPage() {
      return $this->page;
    }
}

class HTMLPageDirector extends AbstractPageDirector {
    private $builder = NULL;
    private $pageTitle = NULL;
    private $pageHeader = NULL;
    private $pageText = NULL;


    public function __construct(AbstractPageBuilder $builder_in, $pageTitle, $pageHeader, $pageText) {
         $this->builder = $builder_in;
         $this->pageTitle = $pageTitle;
         $this->pageHeader = $pageHeader;
         $this->pageText = $pageText;
    }
    public function buildPage($pageTitle, $pageHeader, $pageText) {
      $this->builder->setTitle($pageTitle);
      $this->builder->setHeading($pageHeader);
      $this->builder->setText($pageText);
      $this->builder->formatPage();
    }
    public function getPage() {
      return $this->builder->getPage();
    }
}

  writeln('BEGIN TESTING BUILDER PATTERN');
  writeln('');

  $pageBuilder = new HTMLPageBuilder();
  $pageDirector = new HTMLPageDirector($pageBuilder, $title, $header, $text_body);
  $pageDirector->buildPage($title, $header, $text_body);
  $page = $pageDirector->getPage();
  writeln($page->showPage());
  writeln('');
 
  writeln('END TESTING BUILDER PATTERN');

  function writeln($line_in) {
    echo $line_in."<br/>";
  }

?>
<?php
namespace app\view;

class HeaderAndFooters{
    private bool $bootstrap;
    private bool $datatable;
    private string $pagename;

    /**
     * @param bool $bootstrap
     * @param bool $datatable
     * @param string $pagename
     */
    public function __construct(bool $bootstrap, bool $datatable, string $pagename)
    {
        $this->bootstrap = $bootstrap;
        $this->datatable = $datatable;
        $this->pagename = $pagename;
    }


    public function addHeader()
    {

                echo '<!DOCTYPE html>
        <html lang="hu">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">';

//-----------LINK SECTION-------------------------------------

//                Link Bootstrap
        if ($this->bootstrap == true) {
            echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">';
        }
//                Link Datatable
        if ($this->datatable == true){
            echo '
                   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                   <link href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
                   <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
                  
                  ';
        }

//-----------CLOSE TO HEAD-------------------------------------

        echo "<title>$this->pagename</title>";

        echo '</head><body>';

    }

public function addFooter($dataTableId){

    echo '<body>';
//-------------SCRIPT SECTION

    // Script Bootstrap
    if ($this->bootstrap == true){
        echo '<!-- popper.js 2.1 install -->
             <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
             <!-- BS JS  5.1.3 install -->
             <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
             <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>';

    }

    //Script Datatable
    if ($this->datatable == true){
        echo "<script>
                $(document).ready( function () {
                    $('#$dataTableId').DataTable();
                } );
                </script>";

    }
//-----------CLOSE BODY AND HTML
    echo '</body></html>';
}


}





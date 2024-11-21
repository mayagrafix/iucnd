<?php

// Declare Current Page Name in a global variable
$currentPage = basename($_SERVER['PHP_SELF']);

// Function to write menu
function writeMenu()
{

    // Access global variable
    global $currentPage;

    $writeMenuHTML = "";
    $fileName = "datafiles/menu.csv";
    $submenu = "datafiles/publicationssubmenu.csv";

    if (($handle = fopen("$fileName", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            // Block out Publications page to add sub-menu
            if ($data[1] != "Publications") {
                //Check whether this is the current page
                if ($currentPage == $data[0]) {
                    $writeMenuHTML .= "<li class=\"nav-item\"><a class=\"nav-link active\" aria-current=\"page\" href=\"#\">" . $data[1] . "</a>";
                } else {
                    $writeMenuHTML .= "<li class=\"nav-item\"><a class=\"nav-link non-active\" href=\"" . $data[0] . "\">" . $data[1] . "</a>";
                }
            } else {
                $writeMenuHTML .= "<li class=\"nav-item dropdown\">";
                $writeMenuHTML .= "<a class=\"nav-link non-active dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> Publications";
                $writeMenuHTML .= "</a>";
                $writeMenuHTML .= "<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">";
                //Open Sub Menu CSV file for drop down menu
                if (($submenuhandle = fopen("$submenu", "r")) !== FALSE) {
                    while (($subdata = fgetcsv($submenuhandle, 1000, ",")) !== FALSE) {
                        $writeMenuHTML .= "<li><a class=\"dropdown-item m-0\" href=\"publications.php?publicationspagename=" . $subdata[1] . "\">" . $subdata[2] . "</a></li>";
                    }
                    fclose($submenuhandle);
                }

                $writeMenuHTML .= "</ul>";
                $writeMenuHTML .= "</li>";
            }
            $writeMenuHTML .= "</li>";
        }
        fclose($handle);
    }

    return $writeMenuHTML;

}

// Function to write title
function echoTitle()
{

    // Access global variable
    global $currentPage;

    switch ($currentPage) {
        case "index.php":
            echo "";
            break;
        case "":
            echo "";
            break;
        default:
            echo "";
            break;
    }
}

// Function for Carousel

function writeCarousel()
{

    $dir = "images/home_carousel/"; // Define Carouel images Folder
    $images_array = glob($dir . "*.jpg"); // Get Filenames in an array

    $HTMLText = ""; // Define variable for HTML Text

    $i = 0; // Start Counter
    $HTMLText = "<div class=\"carousel-indicators\">"; // Initiate Ordered List for Carousel Indicators

    foreach ($images_array as $image) {
        $HTMLText .= "<button type=\"button\" data-bs-target=\"#home-carousel\" data-bs-slide-to=\"" . $i . "\""; // Data Slider

        if ($i == 0) { // add active class for the first item
            $HTMLText .= " class=\"active\"";
        }
        $HTMLText .= " aria-current=\"true\" aria-label=\"Slide\"" . $i . "\"></button>";

        $i++; // Increment Counter
    }

    $HTMLText .= "</div>"; // Closing tag for Carousel Indicators Ordered List

    $j = 0; // Define new counter for Images

    $HTMLText .= "<div class=\"carousel-inner\">"; // Start Div tag for Carousel Images

    foreach ($images_array as $imageName) {
        $HTMLText .= "<div class=\"carousel-item";

        if ($j == 0) { // Add active class to the first item
            $HTMLText .= " active";
        }
        $HTMLText .= "\"> \r\n <img class=\"img-fluid d-block w-100\" src=\"" . $imageName . "\" alt=\"Carousel Item\">\r\n </div>";

        $j++; // Increment Counter
    }

    $HTMLText .= "</div>"; // Closing tag for Carousel Images

    return $HTMLText;

}

// Function for Faculty Grid
function writeFacultyGrid()
{
    $fileName = "datafiles/faculty.csv";
    $writeFacultyGridHTML = "";
    $imageLink = "";

    if (($handle = fopen("$fileName", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $writeFacultyGridHTML .= "<div class=\"col\">";
            $writeFacultyGridHTML .= "<div class=\"card bg-orange h-100\">";
            // Check whether the data is present to add link to individual faculty page
            if ($data[3] != "" && $data[6] != "") {
                $writeFacultyGridHTML .= "<a href=\"faculty.php?pagename=" . $data[0] . "\">";
                $imageLink = "yes";
            }
            // Check whether text data is present and individual link is present
            if ($data[3] == "" && $data[6] == "" && $data[7] != "") {
                $writeFacultyGridHTML .= "<a href=\"" . $data[7] . "\" target=\"_blank\">";
                $imageLink = "yes";
            }
            $writeFacultyGridHTML .= "<img class=\"card-img-top";
            // Check whether $imageLink is yes to add faculty image class to the image
            if ($imageLink == "yes") {
                $writeFacultyGridHTML .= " faculty-image";
            }
            $writeFacultyGridHTML .= "\" src=\"images/" . $data[2] . "\" alt=\"\">";
            // Check whether the data is present to add closing tag for the link to individual faculty page
            if ($imageLink == "yes") {
                $writeFacultyGridHTML .= "</a>";
            }
            $writeFacultyGridHTML .= "<div class=\"card-body bg-darkpurple\">";
            $writeFacultyGridHTML .= "<p class=\"faculty-name m-0\">" . $data[0] . "<br><span class=\"faculty-designation\">" . $data[1] . "</span></p>";
            $writeFacultyGridHTML .= "</div>";
            $writeFacultyGridHTML .= "</div>";
            $writeFacultyGridHTML .= "</div>";
            $imageLink = "no";

        }

        fclose($handle);


    }

    return $writeFacultyGridHTML;

}

// Function for Faculty Page
function writeFacultyPage($pageName)
{
    $fileName = "datafiles/faculty.csv";
    $writeFacultyPageHTML = "";

    if (($handle = fopen("$fileName", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if ($pageName == $data[0]) {
                $writeFacultyPageHTML .= "<div class=\"col-12 mt-4\">";
                $writeFacultyPageHTML .= "<div class=\"card bg-verylightpurple\">";
                $writeFacultyPageHTML .= "<div class=\"card-header\">";
                $writeFacultyPageHTML .= "<p class=\"m-0\">" . $data[0] . "<br><span class=\"faculty-designation\">" . $data[1] . "</span></p>";
                $writeFacultyPageHTML .= "</div>";

                $writeFacultyPageHTML .= "<div class=\"card-body\">";

                $writeFacultyPageHTML .= "<div class=\"row\">";

                $writeFacultyPageHTML .= "<div class=\"col-12 col-md-3\">";

                $writeFacultyPageHTML .= "<div class=\"card h-100\">";
                $writeFacultyPageHTML .= "<img class=\"card-img-top\" src=\"images/" . $data[2] . "\" alt=\"" . $data[2] . "\">";
                $writeFacultyPageHTML .= "<div class=\"card-body bg-white\">";
                $writeFacultyPageHTML .= "<p class=\"m-0 faculty-address\">";
                $writeFacultyPageHTML .= $data[3];
                // Check if 1st mail id is present
                if ($data[4] != "") {
                    $writeFacultyPageHTML .= "<br><a class=\"faculty-link\" href=\"mailto:" . $data[4] . "\">" . $data[4] . "</a>";

                } // Check if 2nd mail id is present
                if ($data[5] != "") {
                    $writeFacultyPageHTML .= "<br><a class=\"faculty-link\" href=\"mailto:" . $data[5] . "\">" . $data[5] . "</a>";

                }
                $writeFacultyPageHTML .= "</p>";
                $writeFacultyPageHTML .= "</div>";
                $writeFacultyPageHTML .= "</div>";

                $writeFacultyPageHTML .= "</div>";

                $writeFacultyPageHTML .= "<div class=\"col-12 col-md-9 mt-4 mt-md-0\">";
                $writeFacultyPageHTML .= "<div class=\"card h-100\">";
                $writeFacultyPageHTML .= "<div class=\"card-body\">";
                $writeFacultyPageHTML .= $data[6];
                $writeFacultyPageHTML .= "</div>";
                $writeFacultyPageHTML .= "</div>";
                $writeFacultyPageHTML .= "</div>";

                $writeFacultyPageHTML .= "</div>";

                $writeFacultyPageHTML .= "</div>";

                $writeFacultyPageHTML .= "</div>";
                $writeFacultyPageHTML .= "</div>";
            }

        }

        fclose($handle);


    }

    return $writeFacultyPageHTML;

}

function writeResearchScholars($selectFileName)
{
    $fileName = "datafiles/" . $selectFileName;
    $writeResearchScholarHTML = "";

    if (($handle = fopen("$fileName", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $writeResearchScholarHTML .= "<div class=\"col\">";
            $writeResearchScholarHTML .= "<div class=\"card bg-orange h-100\">";
            //Check whether research area text is present
            if ($data[3] != "") {
                $writeResearchScholarHTML .= "<a href=\"\" data-bs-toggle=\"modal\" data-bs-target=\"#" . $data[1] . "Modal\">";
            }
            $writeResearchScholarHTML .= "<img class=\"card-img-top";
            //Check whether research area text is present to add faculty image class to image
            if ($data[3] != "") {
                $writeResearchScholarHTML .= " faculty-image";
            }
            $writeResearchScholarHTML .= "\" src=\"images/" . $data[1] . ".jpg\" alt=\"\">";
            //Check whether research area text is present
            if ($data[3] != "") {
                $writeResearchScholarHTML .= "</a>";
            }
            $writeResearchScholarHTML .= "<div class=\"card-body bg-darkpurple\">";
            $writeResearchScholarHTML .= "<p class=\"faculty-name m-0\">" . $data[0] . "<br>";
            $writeResearchScholarHTML .= "<a class=\"faculty-link\" href=\"mailto:" . $data[2] . "\">" . $data[2] . "</a></p>";
            $writeResearchScholarHTML .= "</div>";
            $writeResearchScholarHTML .= "</div>";
            $writeResearchScholarHTML .= "</div>";
            if ($data[3] != "") {
                $writeResearchScholarHTML .= "<div class=\"modal fade\" id=\"" . $data[1] . "Modal\" tabindex=\"-1\" aria-labelledby=\"" . $data[1] . "ModalLabel\" aria-hidden=\"true\">";
                $writeResearchScholarHTML .= "<div class=\"modal-dialog modal-dialog-centered\">";
                $writeResearchScholarHTML .= "<div class=\"modal-content\">";
                $writeResearchScholarHTML .= "<div class=\"modal-header bg-darkpurple text-white\">";
                $writeResearchScholarHTML .= "<button type=\"button\" class=\"btn-close bg-lightpurple\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>";
                $writeResearchScholarHTML .= "</div>";
                $writeResearchScholarHTML .= "<div class=\"modal-body row\">";
                $writeResearchScholarHTML .= "<div class=\"col-4 col-md-3\"> <img class=\"img-fluid rounded-2\" src=\"images/" . $data[1] . ".jpg\" alt=\"\"> </div>";
                $writeResearchScholarHTML .= "<div class=\"col-8 col-md-9\">";
                $writeResearchScholarHTML .= "<div class=\"modal-titlearea\">";
                $writeResearchScholarHTML .= "<h5 class=\"modal-title\" id=\"" . $data[1] . "ModalLabel\">" . $data[0] . "<br>";
                $writeResearchScholarHTML .= "<span class=\"modal-subtitle\">Research Area</span></h5>";
                $writeResearchScholarHTML .= "</div>";
                $writeResearchScholarHTML .= "<p class=\"mt-2\">" . $data[3] . "</p>";
                $writeResearchScholarHTML .= "</div>";
                $writeResearchScholarHTML .= "</div>";
                $writeResearchScholarHTML .= "<div class=\"modal-footer\">";
                $writeResearchScholarHTML .= "<button type=\"button\" class=\"btn orangebutton\" data-bs-dismiss=\"modal\">Close</button>";
                $writeResearchScholarHTML .= "</div>";
                $writeResearchScholarHTML .= "</div>";
                $writeResearchScholarHTML .= "</div>";
                $writeResearchScholarHTML .= "</div>";
            }

        }
    }

    return $writeResearchScholarHTML;

}

// Function for Publications Page
function writePublicationsList($publicationsPageName)
{
    $fileName = "datafiles/";
    if ($publicationsPageName == 'patents') {
        $fileName .= "patents.csv";
    } elseif ($publicationsPageName == 'journal-articles') {
        $journalFileNameOne = 'datafiles/journal-articles-2022.csv';
        $journalFileNameTwo = 'datafiles/journal-articles-2021.csv';
        $journalFileNameThree = 'datafiles/journal-articles-2020.csv';
    } elseif ($publicationsPageName == 'conferences') {
        $fileName .= "conferences.csv";
    }
    $writePublicationsListHTML = "";

    if($publicationsPageName != 'journal-articles') {
        $writePublicationsListHTML .= '<ul class="iucnd-list">';
        if (($handle = fopen("$fileName", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $writePublicationsListHTML .= "<li>" . $data[0] . "</li>";
            }
        }
        $writePublicationsListHTML .= '</ul>';
        fclose($handle);
    } else {
        $writePublicationsListHTML .= '<h6 class="badge text-wrap topic-heading">2022</h6>';
        $writePublicationsListHTML .= '<ul class="iucnd-list">';
        if (($handle = fopen("$journalFileNameOne", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $writePublicationsListHTML .= "<li>" . $data[0] . "</li>";
            }
        }
        $writePublicationsListHTML .= '</ul>';
        fclose($handle);
        $writePublicationsListHTML .= '<h6 class="badge text-wrap topic-heading">2021</h6>';
        $writePublicationsListHTML .= '<ul class="iucnd-list">';
        if (($handle = fopen("$journalFileNameTwo", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $writePublicationsListHTML .= "<li>" . $data[0] . "</li>";
            }
        }
        $writePublicationsListHTML .= '</ul>';
        fclose($handle);
        $writePublicationsListHTML .= '<h6 class="badge text-wrap topic-heading">2020</h6>';
        $writePublicationsListHTML .= '<ul class="iucnd-list">';
        if (($handle = fopen("$journalFileNameThree", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $writePublicationsListHTML .= "<li>" . $data[0] . "</li>";
            }
        }
        $writePublicationsListHTML .= '</ul>';
        fclose($handle);
    }

    return $writePublicationsListHTML;
    $fileName = '';
}

?>
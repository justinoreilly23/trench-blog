@php

  $uri = "$_SERVER[REQUEST_URI]";

  switch ($uri)
  {
    case strpos($uri, "project") == true :
      $section_header = "Projects";
    break;

    case strpos($uri, "about") == true :
      $section_header = "About";
    break;

    case strpos($uri, "contact") == true :
      $section_header = "Contact";
    break;

    default : $section_header = null;
  }

echo $section_header;

@endphp

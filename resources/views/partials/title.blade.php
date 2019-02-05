<title >
  @php

    $uri = "$_SERVER[REQUEST_URI]";

    switch ($uri)
    {
      case strpos($uri, "project") == true :
        echo "Projects";
      break;

      case strpos($uri, "about") == true :
        echo "About";
      break;

      case strpos($uri, "contact") == true :
        echo "Contact";
      break;

      case strpos($uri, "login") == true :
        echo "Login";
      break;

      case strpos($uri, "register") == true :
        echo "Register";
      break;

      default : echo "Home";
    }

  echo " | Ethereal";

  @endphp
</title >
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pracownia Kreślarska</title>
    <link rel="stylesheet" href="output.css">
</head>
<body>
<nav class="flex items-center justify-between flex-wrap p-6">
    <div class="flex items-center flex-shrink-0 text-black mr-6">
      <img src="zdj/icons8-home-page-50.png" alt="" class="">
      <span class="font-semibold text-xl tracking-tight ml-3 mt-1"> Pracownia Kreślarska</span>
    </div>
    <div class="block lg:hidden">
      <button class="flex items-center px-3 py-2 border rounded text-black border-black hover:text-black hover:border-black">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div>
    <div class="w-full block flex-grow text-center lg:flex lg:items-center lg:w-auto xl:flex xl:items-center xl:w-auto">
      <div class="text-sm lg:flex-grow">
        <a href="index.html" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4 text-lg">
          Strona Główna
        </a>
        <a href="oferta.html" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4 text-lg">
          Oferta
        </a>
        <a href="projekty.php" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4 text-lg">
          Projekty
        </a>
        <a href="kontakt.html" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4 text-lg">
          Kontakt
        </a>
        <a href="ofirmie.html" class="block mt-4 lg:inline-block lg:mt-0 text-black text-lg">
          O Firmie
        </a>
      </div>
      <div class="flex">
        <a href="tel:+123456789">
          <img src="zdj/icons8-iphone-se-30.png" alt="" class="hidden lg:block">
        </a>
        <a href="tel:+123456789" class="hidden lg:block inline-block text-sm px-4 py-2 leading-none text-lg text-black border-black mt-4 lg:mt-0">
          +48 123 321 123
        </a>
      </div>
    </div>
  </nav>

  <script>
        const menuButton = document.querySelector('.block button');
        const menu = document.querySelector('.text-center');
    
        menuButton.addEventListener('click', () => {
          menu.classList.toggle('hidden');
        });
      </script>

      <section>
        <div class="relative">
          <img src="zdj/mainphoto-project.png" class="w-full h-[877px]">
          <div class="absolute bottom-1/3 left-1/4 bg-white  h-[157px]  flex justify-center items-center pl-10 lg:pl-2  w-2/3 text-white font-medium text-4xl lg:bottom-1/2 sm:w-2/3 lg:text-5xl xl:text-6xl xl:w-1/2">
            <p class="font-bold text-7xl leading-8 text-center text-gray-800 font-sans mb-4">Projekty</p>
          </div>
        </div> 
        </section>

        <section>
            <div class="container mx-auto py-4 mt-[170px] mb-[150px]">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                  <div class="flex flex-col items-center justify-center">
                    <img src="zdj/project/photo-house1.png" alt="Obrazek 1" class="w-full h-[250px] transform hover:scale-110 ease-in-out duration-500">
                  </div>
                  <div class="flex flex-col items-center justify-center">
                    <img src="zdj/project/photo-house2.png" alt="Obrazek 2" class="w-full h-[250px] transform hover:scale-110 ease-in-out duration-500">
                  </div>
                  <div class="flex flex-col items-center justify-center">
                    <img src="zdj/project/photo-house3.png" alt="Obrazek 3" class="w-full h-[250px] transform hover:scale-110 ease-in-out duration-500">
                  </div>
                  <div class="flex flex-col items-center justify-center">
                    <img src="zdj/project/photo-house4.png" alt="Obrazek 4" class="w-full h-[250px] transform hover:scale-110 ease-in-out duration-500">
                  </div>
                  <div class="flex flex-col items-center justify-center">
                    <img src="zdj/project/photo-house5.png" alt="Obrazek 5" class="w-full h-[250px] transform hover:scale-110 ease-in-out duration-500">
                  </div>
                  <div class="flex flex-col items-center justify-center">
                    <img src="zdj/project/photo-house6.png" alt="Obrazek 6" class="w-full h-[250px] transform hover:scale-110 ease-in-out duration-500">
                  </div>
                  <div class="flex flex-col items-center justify-center">
                    <img src="zdj/project/photo-house7.png" alt="Obrazek 7" class="w-full h-[250px] transform hover:scale-110 ease-in-out duration-500">
                  </div>
                  <div class="flex flex-col items-center justify-center">
                    <img src="zdj/project/photo-house8.png" alt="Obrazek 8" class="w-full h-[250px] transform hover:scale-110 ease-in-out duration-500">
                  </div>
                  <div class="flex flex-col items-center justify-center">
                    <img src="zdj/project/photo-house9.png" alt="Obrazek 9" class="w-full h-[250px] transform hover:scale-110 ease-in-out duration-500">
                  </div>
                  <div class="flex flex-col items-center justify-center">
                    <img src="zdj/project/photo-house10.png" alt="Obrazek 10" class="w-full h-[250px] transform hover:scale-110 ease-in-out duration-500">
                  </div>
                  <div class="flex flex-col items-center justify-center">
                    <img src="zdj/project/photo-house11.png" alt="Obrazek 11" class="w-full h-[250px] transform hover:scale-110 ease-in-out duration-500">
                  </div>
                  <div class="flex flex-col items-center justify-center">
                    <img src="zdj/project/photo-house12.png" alt="Obrazek 12" class="w-full h-[250px] transform hover:scale-110 ease-in-out duration-500">
                  </div>
                  <div class="flex flex-col items-center justify-center">
                    <img src="zdj/project/photo-house13.png" alt="Obrazek 13" class="w-full h-[250px] transform hover:scale-110 ease-in-out duration-500">
                  </div>
                  <div class="flex flex-col items-center justify-center">
                    <img src="zdj/project/photo-house14.png" alt="Obrazek 14" class="w-full h-[250px] transform hover:scale-110 ease-in-out duration-500">
                  </div>
                  <div class="flex flex-col items-center justify-center">
                    <img src="zdj/project/photo-house15.png" alt="Obrazek 14" class="w-full h-[250px] transform hover:scale-110 ease-in-out duration-500">
                  </div>
                  <div class="flex flex-col items-center justify-center">
                    <img src="zdj/project/photo-house16.png" alt="Obrazek 14" class="w-full h-[250px] transform hover:scale-110 ease-in-out duration-500">
                  </div>
                  </section> 

                  <section>
                  <section class="flex flex-col items-center">
  <h1 class="text-4xl md:text-6xl lg:text-8xl font-bold text-center">Najnowsze Projekty</h1>
  <div class=" flex-wrap justify-center items-start mt-8 grid grid-cols-4 sm:grid-cols-4 md:grid-cols-4 gap-4">
    
    <?php
      // Tworzenie połączenia z bazą danych
      $conn = new mysqli("localhost", "root", "", "form");
        // Sprawdzanie czy udało się połączyć z bazą danych
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Wykonywanie zapytania SQL
  $sql = "SELECT title, image, description FROM photo";
  $result = $conn->query($sql);

  // Wyświetlanie wyniku zapytania na stronie HTML
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<div class='w-full p-4 mt-16'>";
      echo "<div class='grid grid-cols-2 gap-4'>";
      echo "<img src=' " . $row["image"] . "' class='max-w-full h-auto mb-2 w-full h-[250px] transform hover:scale-110 ease-in-out duration-500 col-span-1' />";
      echo "<div class='col-span-1'>";
      echo "<h2 class='text-lg font-semibold mb-2'>" . $row["title"] . "</h2>";
      echo "<p class='text-sm leading-5 text-lg'>" . $row["description"] . "</p>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
    }
  } else {
    echo "0 results";
  }

  

  // Zamykanie połączenia z bazą danych
  $conn->close();
?>


                  </section>
                  <footer class="flex mt-16 md:mt-24 h-72 md:h-96 bg-fixed bg-no-repeat bg-cover" >
        <div class="flex opacity-90 mx-auto h-full px-4 py-8 md:flex-row md:justify-between bg-gray-800 w-full items-center">
          <img src="zdj/pngegg.png" alt="Logo firmy" class="w-full md:w-1/3 h-full md:h-auto mx-auto md:ml-0  sm:ml-0 lg:w-[250px] lg:ml-[400px] ">
          <h2 class="block w-full md:w-1/2 text-white text-center text-4xl mt-4 md:mt-0 lg:inline-block lg:mr-[350px] lg:text-6xl">Pracownia Kreślarska</h2>
        </div>
    </footer>
</body>
</html>
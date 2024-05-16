<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id["id"] = $_POST["id"];
    $email["email"] = $_POST["email"];
    $subject["subject"] = $_POST["subject"];
    $message["message"] = $_POST["message"];
    array_push($postArray , $id);
    array_push($postArray , $email);
    array_push($postArray , $message);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    
<div class="flex items-center justify-center p-12">

  <div class="mx-auto w-full max-w-[550px]">
    <form action="/" method="POST">
      <div class="mb-5">
        <label for="id" class="mb-3 block text-base font-medium text-[#07074D]">id</label>
        <input type="text" name="id" id="id" placeholder="identifiant" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
      </div>
      <div class="mb-5">
        <label for="titre" class="mb-3 block text-base font-medium text-[#07074D]"> Titre </label>
        <input type="titre" name="titre" id="titre" placeholder="Titre" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
      </div>
      <div class="mb-5">
        <label for="contenu" class="mb-3 block text-base font-medium text-[#07074D]" > Contenu </label>
        <textarea rows="8" name="contenu" id="contenu" placeholder="Contenu" class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
      </div>
      <div>
        <button class="hover:shadow-form rounded-md bg-[red] py-3 px-8 text-base font-semibold text-white outline-none" type="submit"> Enregistrer </button>
      </div>
    </form>
  </div>
</div>
</body>
</html>
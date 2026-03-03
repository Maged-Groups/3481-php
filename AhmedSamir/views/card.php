<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Card</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center p-6 flex-wrap gap-5">

    <div class="border border-gray-200 lg:w-3/12 md:w-4/12 w-full mb-10 p-5 rounded-2xl">

        <span class="bg-black/80 text-white text-sm px-3 py-1 rounded-full">
            $<?= $product['price']; ?>
        </span>
        <img
            src="<?= $product['thumbnail']; ?>"
            alt="<?= $product['title']; ?>"
            class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500">

        <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 ">
                <?= $product['title']; ?>
            </h3>
        </div>
    </div>


</body>

</html>
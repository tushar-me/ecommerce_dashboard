<template>
<div class="relative overflow-x-auto">
          <h3 class="text-2xl font-medium p-2  text-black">Top Products</h3>
          <table class="w-full text-sm text-left rtl:text-right text-black">

            <thead class="text-xs text-white uppercase bg-secondary border-b bg-primary">
            <tr>
              <th scope="col" class="px-16 py-3">
                <span class="sr-only">Image</span>
              </th>
              <th scope="col" class="px-6 py-3 ">
                Product
              </th>
              <th scope="col" class="px-6 py-3 ">
                Price
              </th>
            </tr>
            </thead>
            <tbody>
            <tr class="border-b border-gray-300">
              <td class="p-4">
                <img  src="https://www.apple.com/v/watch/bm/images/overview/select/product_se__frx4hb13romm_large_2x.png" class="w-16 md:w-20 max-w-full max-h-full" alt="Apple Watch">
              </td>
              <td class="px-6 py-4 font-semibold ">
                Apple Watch
              </td>
              <td class="px-6 py-4 font-semibold ">
                $599
              </td>
            </tr>
            <tr class="border-b border-gray-300 hover:bg-opacity-100">
              <td class="p-4">
                <img src="https://www.apple.com/v/imac/p/images/overview/color_front_green__eb8qbnemmre6_large_2x.jpg" class="w-16 md:w-20 max-w-full max-h-full" alt="Apple iMac">
              </td>
              <td class="px-6 py-4 font-semibold ">
                iMac 27"
              </td>

              <td class="px-6 py-4 font-semibold =">
                $2499
              </td>
            </tr>
            <tr class="border-b border-gray-300 hover:bg-opacity-100">
              <td class="p-4">
                <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-compare-iphone-15-202309?wid=384&hei=512&fmt=jpeg&qlt=90&.v=1692827832423" class="w-16 md:w-20 max-w-full max-h-full" alt="iPhone 12">
              </td>
              <td class="px-6 py-4 font-semibold ">
                IPhone 12
              </td>

              <td class="px-6 py-4 font-semibold ">
                $999
              </td>
            </tr>
            </tbody>
          </table>
        </div>
</template>
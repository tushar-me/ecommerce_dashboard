<script setup>
    import BarChart from '@/components/Chart/BarChart.vue';
    import TopProducts from '@/components/TopProducts.vue';
    import RecentOrder from '@/components/RecentOrder.vue';
    import AppLayout from "@/components/Layouts/AppLayout.vue";
</script>
<template>
    <AppLayout>

      <div class="flex px-2">
        <div class="w-1/5 px-2">
          <div
              class="
              h-full
              p-4
              overlay
              shadow
              bg-[url('https://img.freepik.com/free-photo/shopping-cart-with-presents_658428-64.jpg?t=st=1717409303~exp=1717412903~hmac=ef1e57a02078b8fd2419ceb6514a406d53a22fc5221264e8849fce08970214db&w=1060')]
                w-full bg-cover bg-no-repeat bg-center"
          >
            <div class="relative z-10 flex flex-col justify-between h-full">
              <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-slate-400/50 border border-gray-100 flex items-center justify-center">
                  <Icon name="hugeicons:money-receive-circle"  class="text-gray-100 text-3xl" />
                </div>
                <h3 class="text-end text-3xl font-medium text-white">$5000</h3>
              </div>
              <div>
                <p class=" text-gray-200 text-xl text-end">Total Earning</p>
                <p class="text-end font-light text-sm text-gray-200">Compared Last Year</p>
              </div>
            </div>
          </div>
        </div>
        <div class="w-1/5 px-2">
          <div
              class="
              h-full
              p-4
                overlay
                shadow
                bg-[url('https://img.freepik.com/free-photo/shopping-cart-with-presents_658428-64.jpg?t=st=1717409303~exp=1717412903~hmac=ef1e57a02078b8fd2419ceb6514a406d53a22fc5221264e8849fce08970214db&w=1060')]
                  w-full bg-cover bg-no-repeat bg-center"
          >
            <div class="relative z-10 flex flex-col justify-between h-full">
              <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-slate-400/50 border border-gray-100 flex items-center justify-center">
                  <Icon name="ic:sharp-attach-money" class="text-gray-100 text-3xl" />
                </div>
                <h3 class="text-end text-3xl font-medium text-white">$89</h3>
              </div>
              <p class="text-gray-200 text-xl text-end">Sale Today</p>
            </div>
          </div>
        </div>
        <div class="w-1/5 px-2">
          <div
              class="
              h-full
              p-4
                overlay
                shadow
                bg-[url('https://img.freepik.com/free-photo/shopping-cart-with-presents_658428-64.jpg?t=st=1717409303~exp=1717412903~hmac=ef1e57a02078b8fd2419ceb6514a406d53a22fc5221264e8849fce08970214db&w=1060')]
                  w-full bg-cover bg-no-repeat bg-center"
          >
            <div class="relative z-10 flex flex-col justify-between h-full">
              <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-slate-400/50 border border-gray-100 flex items-center justify-center">
                  <Icon name="ic:outline-shopping-cart-checkout" class="text-gray-100 text-2xl" />
                </div>
                <h3 class="text-end text-3xl font-medium text-white">15</h3>
              </div>
              <div>
                <p class="text-white text-xl text-end">New Order</p>
                <p class="text-end font-light text-sm text-white">Compared Last Week</p>
              </div>
            </div>
          </div>
        </div>
        <div class="w-1/5 px-2">
          <div
              class="
              h-full
              p-4
                overlay
                shadow
                bg-[url('https://img.freepik.com/free-photo/shopping-cart-with-presents_658428-64.jpg?t=st=1717409303~exp=1717412903~hmac=ef1e57a02078b8fd2419ceb6514a406d53a22fc5221264e8849fce08970214db&w=1060')]
                  w-full bg-cover bg-no-repeat bg-center"
          >
            <div class="relative z-10 flex flex-col justify-between h-full">
              <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-slate-400/50 border border-gray-100 flex items-center justify-center">
                  <Icon name="tabler:shopping-cart-up" class="text-gray-100 text-2xl" />
                </div>
                <h3 class="text-end text-3xl font-medium text-white">25</h3>
              </div>
              <p class="text-white text-xl text-end">Pending Order</p>
            </div>
          </div>
        </div>
        <div class="w-1/5 px-2">
          <div
              class="
              h-full
              p-4
                overlay
                shadow
                bg-[url('https://img.freepik.com/free-photo/shopping-cart-with-presents_658428-64.jpg?t=st=1717409303~exp=1717412903~hmac=ef1e57a02078b8fd2419ceb6514a406d53a22fc5221264e8849fce08970214db&w=1060')]
                  w-full bg-cover bg-no-repeat bg-center"
          >
            <div class="relative z-10 flex flex-col justify-between h-full">
              <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-slate-400/50 border border-gray-100 flex items-center justify-center">
                  <Icon name="hugeicons:shopping-basket-check-out-03" class="text-gray-100 text-3xl" />
                </div>
                <h3 class="text-end text-3xl font-medium text-white">128</h3>
              </div>
              <p class="text-white text-xl text-end">Total Products</p>
            </div>
          </div>
        </div>
      </div>  

      <div class="flex mt-4 mx-2" >
          <div class="w-2/3 px-2">
              <div class="p-4 shadow bg-white">
                  <BarChart />
              </div>
          </div>
          <div class="w-1/3 px-2">
              <div class="shadow bg-white">
                  <TopProducts />
              </div>
          </div>
      </div>

    <div class="mt-5 mx-4 bg-white">
        <RecentOrder />
    </div>
    </AppLayout>
</template>

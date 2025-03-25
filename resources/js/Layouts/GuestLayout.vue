<script setup>

</script>
<template>
    <div class="layout">
        <header class="header"> </header>

        <div class="content">
            <main class="main">
                <slot />
            </main>
        </div>

    </div>
</template>

  <style scoped>
  .layout {
    display: flex;
    flex-direction: column;
    min-height: 100vh;

  }



  .content {
    display: flex;
    flex: 1;
  }


  .main {
    flex: 1;
    padding: 20px;
  }

  .footer {
    background: #444;
    color: white;
    padding: 10px;
    text-align: center;
  }
  </style>

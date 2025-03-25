<script setup>
import NavBar from '@/Components/NavigationBar.vue';

</script>
<template>
    <div class="layout">
        <header class="header">
            <NavBar label="Pantry"/>
        </header>

        <div class="content">
            <main class="main">
                <slot />
            </main>
        </div>

        <footer class="footer">Stópka</footer>
    </div>
</template>

  <style scoped>
  .layout {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }



  .content {
    margin-top: 70px;
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

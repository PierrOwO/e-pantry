<template>
 <nav>
    <div ref="navbar" class="navbar">
      <i class='bx bx-menu sidebars-rotated' ref="sidebars"  @click="openSideMenu($event)"></i>
      <div class="logo">
        <a v-if="label">{{ label }}</a>
        <a v-else>Logo</a>
      </div>
      <div ref="links"  class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">Menu</span>
          <i class='bx bx-x'  @click="closeSideMenu($event)" ></i>
        </div>
        <ul class="links scroll_view">
            <li >
                <a data="show_users" href="#msu">Users</a>
                <i ref="arrowUsers" @click="openMenuUsers()" class='bx bxs-chevron-down arrow'></i>
                <ul ref="subMenuUsers" class="sub-menu">
                    <li><a  data="show_users" href="#ns">Pokaż członków</a></li>
                    <li><a  data="zaproszenia" href="#ns">Zaproszenia</a></li>
                </ul>
            </li>
            <li>
                <a data-toggle="body_spizarnie" href="#ms">Moje spiżarnie</a>
                <i ref="arrowPantries" @click="openMenuPantries()" class='bx bxs-chevron-down arrow'></i>
                <ul ref="subMenuPantries" class="sub-menu">
                    <li><a  xdata="moja_spizarnia" xnazwa_spizarni="Dom" xid_spizarni="1" href="?s=1&&sn=Dom">Dom</a></li>
                    <li><a  xdata="moja_spizarnia" xnazwa_spizarni="Holandia" xid_spizarni="2" href="?s=2&&sn=Holandia">Holandia</a></li>
                    <li><a  xdata="moja_spizarnia" xnazwa_spizarni="xxx" xid_spizarni="6" href="?s=6&&sn=xxx">xxx</a></li>
                    <li><a  data-toggle="nowa_spizarnia"  href="#ns">Nowa spiżarnia</a></li>
                </ul>
            </li>
            <li >
                <a data-toggle="body_kategorie" href="#k">Kategorie</a>
                <i ref="arrowCategories" @click="openMenuCategories()" class='bx bxs-chevron-down arrow'></i>
                <ul ref="subMenuCategories" class="sub-menu">
                    <li><a  data="kategoria" id_kategorii="8" href="#Chemia">Chemia</a></li>
                    <li><a  data="kategoria" id_kategorii="10" href="#Dania gotowe">Dania gotowe</a></li>
                    <li><a  data="kategoria" id_kategorii="12" href="#Inne">Inne</a></li>
                    <li><a  data="kategoria" id_kategorii="7" href="#Kosmetyki">Kosmetyki</a></li>
                    <li><a  data="kategoria" id_kategorii="2" href="#Mięso">Mięso</a></li>
                    <li><a  data="kategoria" id_kategorii="15" href="#Mrożonki">Mrożonki</a></li>
                    <li><a  data="kategoria" id_kategorii="1" href="#Nabiał">Nabiał</a></li>
                    <li><a  data="kategoria" id_kategorii="6" href="#Napoje">Napoje</a></li>
                    <li><a  data="kategoria" id_kategorii="11" href="#Oleje">Oleje</a></li>
                    <li><a  data="kategoria" id_kategorii="4" href="#Owoce">Owoce</a></li>
                    <li><a  data="kategoria" id_kategorii="5" href="#Produkty zbożowe">Produkty zbożowe</a></li>
                    <li><a  data="kategoria" id_kategorii="13" href="#Przekąski">Przekąski</a></li>
                    <li><a  data="kategoria" id_kategorii="9" href="#Przyprawy">Przyprawy</a></li>
                    <li><a  data="kategoria" id_kategorii="14" href="#Smarowidła">Smarowidła</a></li>
                    <li><a  data="kategoria" id_kategorii="3" href="#Warzywa">Warzywa</a></li>
                </ul>
            </li>
            <li >
                <a data-toggle="body_produkty" href="#p-2">Produkty</a>
                <i ref="arrowProducts" @click="openMenuProducts()" class='bx bxs-chevron-down arrow '></i>
                <ul ref="subMenuProducts" class="sub-menu">
                    <li><a data-toggle="body_produkty" href="#p-2">Wszystkie produkty</a></li>
                    <li><a data-toggle="dodaj_produkt" href="#dp-2">Dodaj produkt</a></li>
                    <li><a data-toggle="historia_produktu" href="#hp-2">Historia</a></li>
                    <li><a data-toggle="nowy_produkt" href="#np-2">Nowy produkt</a></li>             </ul>
                </li>
            <li >
                <a data-toggle="body_lista_zakupow" href="#lz-2">Zakupy</a>
                <i ref="arrowShopping" @click="openMenuShopping()" class='bx bxs-chevron-down arrow '></i>
                <ul ref="subMenuShopping" class="sub-menu">
                    <li><a data-toggle="body_lista_zakupow" href="#lz-2">Lista zakupów</a></li>
                    <li><a data-toggle="body_zakupy" href="#dlz-2">Dodawanie do listy</a></li>
                    <li><a data-toggle="body_historia_zakupow" href="#hlz-2">Historia zakupów</a></li>
                </ul>
            </li>
            <li>
                <a data-toggle="logout" href="#logout">Wyloguj</a>
            </li>
        </ul>
      </div>
      <div ref="searchBox"class="search-box">
        <i ref="searchBoxIcon"  @click="openSearchBox()" class='bx bx-search'></i>
        <div ref="searchBoxInput" class="input-box">
          <input type="text" placeholder="Search...">
          <button class="button-search"><span class="bx bx-search"></span></button>
        </div>
        </div>
    </div>
  </nav>
  </template>

  <script setup>
  defineProps({
    label: String,
  });
  </script>
<script>
export default {
    data() {
        return {
            openedMenuUsers: false,
            openedMenuPantries: false,
            openedMenuProducts: false,
            openedMenuCategories: false,
            openedMenuShopping: false,
            openedSearchBox: false,

        };
    },
    methods:{
        openSearchBox(){
            const navbar = this.$refs.navbar;
            const searchBoxIcon = this.$refs.searchBoxIcon;
            navbar.classList.toggle("showInput");
            if(navbar.classList.contains("showInput")){
                searchBoxIcon.classList.replace("bx-search" ,"bx-x");
            }else {
                searchBoxIcon.classList.replace("bx-x" ,"bx-search");
            }
        },
        openMenuUsers(){
            if(this.openedMenuUsers){
                this.closeMenuUsers();
            }
            else{
                this.openedMenuUsers = true;
                const arrow = this.$refs.arrowUsers;
                const subMenu = this.$refs.subMenuUsers;
                arrow.classList.add('rotate-180-degrees');
                subMenu.style.display = 'block';
            }

        },
        openMenuPantries(){
            if(this.openedMenuPantries){
                this.closeMenuPantries();
            }
            else{
                this.openedMenuPantries = true;
                const arrow = this.$refs.arrowPantries;
                const subMenu = this.$refs.subMenuPantries;
                arrow.classList.add('rotate-180-degrees');
                subMenu.style.display = 'block'
            }

        },
        openMenuProducts(){
            if(this.openedMenuProducts){
                this.closeMenuProducts();
            }
            else{
                this.openedMenuProducts = true;
                const arrow = this.$refs.arrowProducts;
                const subMenu = this.$refs.subMenuProducts;
                arrow.classList.add('rotate-180-degrees');
                subMenu.style.display = 'block';
            }

        },
        openMenuCategories(){
            if(this.openedMenuCategories){
                this.closeMenuCategories();
            }
            else{
                this.openedMenuCategories = true;
                const arrow = this.$refs.arrowCategories;
                const subMenu = this.$refs.subMenuCategories;
                arrow.classList.add('rotate-180-degrees');
                subMenu.style.display = 'block';
            }

        },
        openMenuShopping(){
            if(this.openedMenuShopping){
                this.closeMenuShopping();
            }
            else{
                this.openedMenuShopping = true;
                const arrow = this.$refs.arrowShopping;
                const subMenu = this.$refs.subMenuShopping;
                arrow.classList.add('rotate-180-degrees');
                subMenu.style.display = 'block';
            }

        },
        closeMenuPantries(){
            this.openedMenuPantries = false;
            const arrow = this.$refs.arrowPantries;
            const subMenu = this.$refs.subMenuPantries;
            arrow.classList.remove('rotate-180-degrees');
            subMenu.style.display = 'none'
        },
        closeMenuProducts(){
            this.openedMenuProducts = false;
            const arrow = this.$refs.arrowProducts;
            const subMenu = this.$refs.subMenuProducts;
            arrow.classList.remove('rotate-180-degrees');
            subMenu.style.display = 'none'
        },
        closeMenuCategories(){
            this.openedMenuCategories = false;
            const arrow = this.$refs.arrowCategories;
            const subMenu = this.$refs.subMenuCategories;
            arrow.classList.remove('rotate-180-degrees');
            subMenu.style.display = 'none'
        },
        closeMenuShopping(){
            this.openedMenuShopping = false;
            const arrow = this.$refs.arrowShopping;
            const subMenu = this.$refs.subMenuShopping;
            arrow.classList.remove('rotate-180-degrees');
            subMenu.style.display = 'none'
        },
        closeMenuUsers(){
            this.openedMenuUsers = false;
            const arrow = this.$refs.arrowUsers;
            const subMenu = this.$refs.subMenuUsers;
            arrow.classList.remove('rotate-180-degrees');
            subMenu.style.display = 'none'
        },
        openSideMenu(event) {
            event.stopPropagation();
            const menu = this.$refs.links;
            const sidebars = this.$refs.sidebars;
            sidebars.classList.add('rotate-90-degrees');
            menu.style.left = "0";
        },
        closeSideMenu(event) {
            event.stopPropagation();
            const menu = this.$refs.links;
            const sidebars = this.$refs.sidebars;
            sidebars.classList.remove('rotate-90-degrees');
            menu.style.left = "-100%";
        }
    },
    mounted() {
    //document.addEventListener('click', this.closeSideMenu);
    },
    beforeUnmount() {
    //document.removeEventListener('click', this.closeSideMenu);
    }
}
</script>
<style scoped>

nav{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  height: 70px;
  background: #FFB4B4;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
  z-index: 99;
}
nav .navbar{
  height: 100%;
  max-width: 1250px;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: auto;
  /* background: red; */
  padding: 0 50px;
}
.navbar .logo a{
  font-size: 30px;
  color: #fff;
  text-decoration: none;
  font-weight: 600;
}
nav .navbar .nav-links{
  line-height: 70px;
  height: 100%;
}
nav .navbar .links{
  display: flex;
}
nav .navbar .links li{
  position: relative;
  display: flex;
  align-items: center;
  justify-content: space-between;
  list-style: none;
  padding: 0 14px;
}
nav .navbar .links li a{
  height: 100%;
  text-decoration: none;
  white-space: nowrap;
  color: #fff;
  font-size: 15px;
  font-weight: 500;
}


nav .navbar .links li .arrow{
  /* background: red; */
  height: 100%;
  width: 22px;
  line-height: 70px;
  text-align: center;
  display: inline-block;
  color: #fff;
  transition: transform 0.3s ease;
}
nav .navbar .links li .sub-menu{
  position: absolute;
  top: 70px;
  left: 0;
  line-height: 40px;
  background: #FFB4B4;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
  border-radius: 0 0 4px 4px;
  display: none;
  z-index: 2;
  max-height: 300px;
  overflow-y: auto;
}
nav .navbar .links li:hover .sub-menu{
  display: block;
}
.navbar .links li .sub-menu li{
  padding: 0 22px;
  border-bottom: 1px solid rgba(255,255,255,0.1);
}
.navbar .links li .sub-menu a{
  color: #fff;
  font-size: 15px;
  font-weight: 500;
}
.navbar .links li .sub-menu .more-arrow{
  line-height: 40px;
}
.navbar .links li .sub-menu .more-sub-menu{
  position: absolute;
  top: 0;
  left: 100%;
  border-radius: 0 4px 4px 4px;
  z-index: 1;
  display: none;
}
.links li .sub-menu .more:hover .more-sub-menu{
  display: block;
}
.navbar .search-box{
  position: relative;
   height: 40px;
  width: 40px;
}
.navbar .search-box i{
  position: absolute;
  height: 100%;
  width: 100%;
  line-height: 40px;
  text-align: center;
  font-size: 22px;
  color: #fff;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
}
.navbar .search-box .input-box{
  position: absolute;
  right: calc(100% - 40px);
  top: 80px;
  height: 60px;
  width: 300px;
  background: #FFB4B4;
  border-radius: 6px;
  opacity: 0;
  pointer-events: none;
  transition: all 0.4s ease;
  line-height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;

}
.navbar.showInput .search-box .input-box{
  top: 65px;
  opacity: 1;
  pointer-events: auto;
  background: #FFB4B4;
}
.search-box .input-box::before{
  content: '';
  position: absolute;
  height: 20px;
  width: 20px;
  background: #FFB4B4;
  right: 10px;
  top: -6px;
  transform: rotate(45deg);
  z-index: 0;
}
.search-box .input-box input{
    display: inline;
    height: 35px;
    width: 245px;
    outline: none;
    font-size: 16px;
    border: none;
    border-radius: 4px 0px 0px 4px;
}
.search-box .input-box input:focus,
.search-box .input-box input:active{
    outline: none;
    border: none;
    box-shadow: none;
}
.search-box .input-box button{
    position: relative;
    display: inline;
    height: 35px;
    line-height: 35px;
    width: 35px;
    border-radius: 0px 4px 4px 0px;
    background-color: white;
    color: gray;

    transition: 0.3s;
}
.search-box .input-box button:hover{
    color:#85586F;
}
.search-box .input-box button span{
    font-weight: bold;
    font-size: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.navbar .nav-links .sidebar-logo{
  display: none;
}
.navbar .bx-menu{
  display: none;
}
@media (min-width: 801px){
    .links li:hover .arrow{
  transform: rotate(180deg);
  }
}
@media (max-width:920px) {
  nav .navbar{
    max-width: 100%;
    padding: 0 25px;
  }

  nav .navbar .logo a{
    font-size: 27px;
  }
  nav .navbar .links li{
    padding: 0 10px;
    white-space: nowrap;
  }
  nav .navbar .links li a{
    font-size: 15px;
  }
}
@media (max-width:800px){

  .navbar .bx-menu{
    display: block;
  }
  nav .navbar .nav-links{

    position: fixed;
    top: 0;
    left: -100%;
    display: block;
    max-width: 270px;
    width: 100%;
    background:  #FFB4B4;
    line-height: 40px;
    padding: 20px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    transition: all 0.5s ease;
    z-index: 1000;
  }
  .navbar .nav-links .sidebar-logo{
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .sidebar-logo .logo-name{
    font-size: 25px;
    color: #fff;
  }
    .sidebar-logo  i,
    .navbar .bx-menu{
      font-size: 25px;
      color: #fff;
    }
  .scroll_view{
    height: auto;
    min-height: 30%;
    max-height: 95%;
    overflow-x: hidden;
    overflow-y: auto;
  }
  nav .navbar .links{
    display: block;
    margin-top: 20px;
  }
  nav .navbar .links li .arrow{
    line-height: 40px;
  }
nav .navbar .links li{
    display: block;
  }
nav .navbar .links li .sub-menu{
  position: relative;
  top: 0;
  box-shadow: none;
  display: none;
}
nav .navbar .links li .sub-menu li{
  border-bottom: none;

}
.navbar .links li .sub-menu .more-sub-menu{
  display: none;
  position: relative;
  left: 0;
}
.navbar .links li .sub-menu .more-sub-menu li{
  display: flex;
  align-items: center;
  justify-content: space-between;
}

  .navbar .links li .sub-menu .more-sub-menu{
    display: none;
  }
  .navbar .links li .sub-menu .more span{
    /* background: red; */
    display: flex;
    align-items: center;
    /* justify-content: space-between; */
  }

  .links li .sub-menu .more:hover .more-sub-menu{
    display: none;
  }
  nav .navbar .links li:hover .sub-menu{
    display: none;
  }
    .navbar .nav-links .show .arrow{
        transform: rotate(180deg);
}
    .navbar .nav-links .show  .links .more-arrow{
      transform: rotate(90deg);
    }
}
@media (max-width:370px){
  nav .navbar .nav-links{
  max-width: 100%;
}
}

.navbar .bx-menu:hover{
  color: #85586F;
}
.navbar .bx:hover{
  color: #85586F;
}
nav .navbar .links li:hover > a{
    color: #85586F;
  }
nav .navbar .links li:hover > i{
    color: #85586F;
  }
nav .navbar .links li ul:hover > a{
    color: #85586F;
  }
nav .navbar .links li ul:hover > i{
    color: #85586F;
  }
  .sidebars-rotated{
    transition: 0.4s;
  }
  .rotate-90-degrees {
    transform: rotate(90deg);
  }
  .rotate-180-degrees {
    transform: rotate(180deg);
  }
</style>

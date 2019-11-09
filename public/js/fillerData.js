    /* TEMPLATES LOCALIZADOS*/
    const templateRecomendados = document.getElementById('template-recomendados').innerHTML;
    const templateNovedades = document.getElementById('template-novedades').innerHTML;
    const templateTendencias = document.getElementById('template-tendencias').innerHTML;
    const templateBiblioteca = document.getElementById('template-biblioteca').innerHTML;


    const listaUsuarios = document.querySelector(".lista-usuarios");
    const template = document.getElementById("template-usuario");


    const contenedor = document.getElementById('app');

/* FUNCTIONS */
/*
  const listarRecomendados = array => {
        const patron = document.getElementById('template-recomendados').innerHTML;
        var ListaRecomendados = [ <?php echo implode("','",categorias);?> ];
        const res = templ.rellenar(patron, ListaRecomendados);

        contenedor.innerHTML += `<div class="card m-2 text-left flex-fill" style="width: 16rem;">${res}</div>`;
  }
*/
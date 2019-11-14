 const templ = (function () {

      function aHtml(patron, datos) {
        patron = patron.split('{{');

        let res = patron.shift();

        res = patron.reduce((acc, item) => {
          const valorItem = item.split('}}');
          const llaves = valorItem[0].trim().split('.');

          let i = 0;
          let valor = datos[llaves[0]];
          
          while (typeof valor === 'object') {
            valor = valor[llaves[++i]];
          } 

          return acc + valor + valorItem[1];

        }, res);

        return res;
      }
     
      function rellenar(patron, datos) {
        if ( !datos || !patron) return "";
        
        if (!Array.isArray(datos)) datos = [].concat(datos);

        return datos.map(dato => aHtml(patron, dato)).join('');
      }
     
      return {
        rellenar
      };
    
    })();    

    console.log("holaaaaaaaa");
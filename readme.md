# Ejercicios creando un tema de Wordpress desde cero

Para la siguiente actividad, debes clonar este repositorio y trabajar leyendo atentamente las siguientes instrucciones:

Es importante que hayas visto toda la experiencia online para trabajar en esta actividad.

## Instrucciones

La siguiente actividad esta dividida en pequeños ejercicios para comprender y conocer de mejor manera como crear un tema de Wordpress.

Ejercicios:

1. Dentro de una nueva instalación de Wordpress, crea dos páginas llamadas *Home* y  *Blog*, y luego crea 4 entradas que contengan el título, el contenido, una imagen destacada, además de 1 categoría y 3 tags.
2. Crea un tema nuevo que incorporé como descripción el nombre del tema, tu nombre, y una pequeña descripción acerca del tema. Luego, actívalo, y cuando termines, haz que se impriman las últimas entradas del sitio web en la página de inicio.
3. Modifica la página de inicio del sitio web con la siguiente [página](mi_sitio_web).
    - Esta página HTML contiene estilos CSS y scripts de Javascript que deberás integrar dentro del tema.
    - También deberás separar el `head` y el `footer` de la página y agregarlos en archivos separados. El `head` de la página deberá obtener su información a través de Worpdress. Cuando este listo, llama a estos archivos hacia la página de inicio.
4. Usando la [jerarquía de Wordpress](https://wphierarchy.com/), mueve el contenido agregado en el home, hacía un nuevo archivo que sea más específico.
    - Luego, crea un nuevo archivo en el cuál se puedan agregar las últimas entradas del sitio web. Agrega el header y footer, y finalmente haz que se vean las últimas entradas. Las entradas deberán imprimir el título de la entrada, la imagen destacada, el extracto del contenido, las categorías y tags.
5. Crea una condición dentro del home que especifique que si no está dentro del `front-page` que muestre la `página de entradas`.
    - Asimismo, en la `página de entradas`, agrega una condición que redireccione esta hacia la página de inicio si no se encuentran entradas.

      > Hint: ¿Tienes problemas? Revisa el siguiente [link](https://developer.wordpress.org/reference/functions/wp_redirect/).
6. Haz un deploy del sitio creado, usando el plugin `Duplicator`.

Cuando termines, crea un **README** con el link del deploy que hiciste, junto también con la carpeta wp-content y la [base de datos en formato `.sql`](https://cl.godaddy.com/help/exportar-mis-bases-de-datos-mysql-1487).

Todos los archivos mencionados anteriormente deberán ser **versionados vía push en GitHub**, y luego subidos a la [plataforma empieza](http://empieza.desafiolatam.com/)

**¡Vamos con todo!**

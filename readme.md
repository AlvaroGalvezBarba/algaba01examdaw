1. Abrir un terminal.
2. Escribir "docker-compose up" y darle al "enter".
3. Tendras que entrar a docker desktop y copiar el numero que sale debajo de database.
4. Abres un terminal y pones docker inspect y el numero que has copiado.
5. Despues de eso al final donde pone "IPAddress" lo copias.
6. Despues de eso en el dba.json que esta dentro de "public" "config" y lo copias donde pone "host".
7. En dba.json tambien tendras que cambiar el usuario y contraseña si son diferentes.
8. Si la base de datos no se ha creado en el contenedor tendras que entrar a workbench con el usuario y contraseña que hayas puesto en dba.json y tendras que crearla con el archivo sql que hay en la carpeta db.
9. Para finaliar entraras a un navegador y pondras "localhost" y te apareceran los datos.
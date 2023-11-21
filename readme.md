# Alvaro Galvez Barba
1. Descomprime el zip en una carpeta vacia.
2. Abrir un terminal. basado
3. Escribir "docker-compose up" y darle al "enter".
4. Tendras que entrar a docker desktop y copiar el numero que sale debajo de database.
5. Abres un terminal y pones docker inspect y el numero que has copiado.
6. Despues de eso al final donde pone "IPAddress" lo copias.
7. Despues de eso en el dba.json que esta dentro de "public" "config" y lo copias donde pone "host".
8. En dba.json tambien tendras que cambiar el usuario y contraseña si son diferentes.
9. Si la base de datos no se ha creado en el contenedor tendras que entrar a workbench con el usuario y contraseña que hayas puesto en dba.json y tendras que crearla con el archivo sql que hay en la carpeta db.
10. Para finaliar entraras a un navegador y pondras "localhost" y te apareceran los datos.

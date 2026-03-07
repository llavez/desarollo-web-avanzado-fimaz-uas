Descripcion del sistema
El sistema implementa una jeraquia de clases para representar usuarios, administradores y alumnos
Se valida el formato de correo electronico y se manejan exepciones en caso de errores

Flujo de clases
Usuario (clase base) contiene nombre y correo y en esta clase se valida el formato del correo
Admin hereda de usuario y define el rol  de aministrador
Alumno hereda de usuario y añade el atributo de matricula y define el rol de alumno

Manejo de errores 
Un ejemplo de salida de error: Error controlado: Correo invalido: correo_invalido
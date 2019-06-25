import Server from './server.js';
class RestController{
    constructor() {
        this.URL = "http://localhost/simple_crud/API/";
    }

    getAll(entidad){
        return Server.getDatos(`${this.URL}/${entidad}/`).then(data => {
            return data
        });
    }

    findById(entidad, id){
        return Server.getDatos(`${this.URL}/${entidad}/${id}`).then(id_data => {
            return id_data
        });
    }

    //recibe un object {}, no un Json
    create(datos, entidad){
        return Server.setDatos(datos, `${this.URL}/${entidad}`).then(estadoCreado => {
            return estadoCreado
        });
    }

    edit(datos, entidad, id){
        return Server.setDatos(datos, `${this.URL}/${entidad}/${id}`).then(estadoEditado => {
            return estadoEditado
        });
    }

    remove(entidad, id){
        return Server.setDatos(this.datos_prueba, `${this.URL}/${entidad}/${id}`).then(estadoBorrado => {
            return estadoBorrado
        });
    }
}

export default RestController;
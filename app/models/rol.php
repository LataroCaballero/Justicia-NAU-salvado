<?php

class Rol{
    private string $nombre;
    private int $privilegios;

    public function __construct(string $nombre, string $privilegios)
    {
        $this->nombre=$nombre;
        $this->privilegios=$privilegios;
    }

    public function getNombre():string{
        return $this->nombre;
    }
    public function opciones(){
        $opciones=[];
        if ($this->privilegios==10)
        {
            array_push($opciones,[
                "icono"=>"admin",
                "texto"=>"Peticiones dadas de baja",
                "id"=>"adm-link",
                "link"=>"options.php?mode=admin&page=peticiones_bajadas"
            ]);
            // array_push($opciones,[
            //     "icono"=>"admin",
            //     "texto"=>"Reportes",
            //     "id"=>"adm-link",
            //     "link"=>"options.php?mode=admin&page=reportes"
            // ]);
            array_push($opciones,[
                "icono"=>"admin",
                "texto"=>"Usuarios",
                "id"=>"adm-link",
                "link"=>"options.php?mode=admin&page=usuarios"
            ]);
            
        }
        if ($this->privilegios>=5)
        {
            array_push($opciones,[
                "icono"=>"admin",
                "texto"=>"Destinos",
                "id"=>"adm-link",
                "link"=>"options.php?mode=admin&page=destinos"
            ]);
            array_push($opciones,[
                "icono"=>"admin",
                "texto"=>"Localidades",
                "id"=>"adm-link",
                "link"=>"options.php?mode=admin&page=localidades"
            ]);
            array_push($opciones,[
                "icono"=>"admin",
                "texto"=>"Peticiones nuevas",
                "id"=>"adm-link",
                "link"=>"options.php?mode=admin&page=peticiones_nuevas"
            ]);
            array_push($opciones,[
                "icono"=>"admin",
                "texto"=>"Peticiones finalizadas",
                "id"=>"adm-link",
                "link"=>"options.php?mode=admin&page=peticiones_finalizadas"
            ]);
            array_push($opciones,[
                "icono"=>"admin",
                "texto"=>"Tematicas",
                "id"=>"adm-link",
                "link"=>"options.php?mode=admin&page=tematicas"
            ]);
        }
        if ($this->privilegios>=1)
        {
            array_push($opciones,[
                "icono"=>"interests",
                "texto"=>"Administrar Intereses",
                "id"=>"",
                "link"=>"options.php?page=intereses"
            ]);
            array_push($opciones,[
                "icono"=>"edit",
                "texto"=>"Editar Perfil",
                "id"=>"edit",
                "link"=>"options.php?page=administrar_perfil"
            ]);
            array_push($opciones,[
                "icono"=>"check",
                "texto"=>"Mis peticiones finalizadas",
                "id"=>"check",
                "link"=>"options.php?page=mis_peticiones"
            ]);
            array_push($opciones,[
                "icono"=>"statistics",
                "texto"=>"Informes",
                "id"=>"",
                "link"=>"options.php?mode=admin&page=informes"
            ]);
            array_push($opciones,[
                "icono"=>"donate",
                "texto"=>"Donar",
                "id"=>"",
                "link"=>"options.php?mode=admin&page=informes"
            ]);
            array_push($opciones,[
                "icono"=>"exit",
                "texto"=>"Cerrar sesión",
                "id"=>"logout",
                "link"=>""
            ]);
        }
        return $opciones;
    }
}

?>
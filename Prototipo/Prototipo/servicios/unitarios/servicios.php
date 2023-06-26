<?php
  if (isset($_GET['servicio'])) {
    $servicio = $_GET['servicio'];
    switch ($servicio) {
      case "pintura":
        $titulo = "Pintura interior y exterior";
        $imagen = "https://cdn-icons-png.flaticon.com/512/1276/1276892.png";
        $descripcion = "Si estás considerando renovar el aspecto de tu inmueble, te ayudamos a pintar tu inmueble.";
        $puntos = array();
        for ($i = 1; $i <= 4; $i++) {
          $puntos[] = array("id" => $i);
        }
        break;
      case "impermeabilizacion":
        $titulo = "Impermeabilización";
        $descripcion = 'Si te gustaría proteger tu inmueble frente a las diversas condiciones meteorológicas, la impermeabilización es la alternativa perfecta.';
        $imagen = "https://cdn-icons-png.flaticon.com/512/129/129817.png";
        $puntos = array();
        for ($i = 5; $i <= 8; $i++) {
          $puntos[] = array("id" => $i);
        }
        break;
      case "cisternas":
        $titulo = "Lavado y desinfección de Cisternas";
        $imagen = "https://cdn-icons-png.flaticon.com/512/3022/3022982.png";
        $descripcion = "Ofrecemos el servicio de lavado y desinfección de cisternas con equipos de alta tecnología y personal capacitado. Garantizamos la eliminación de cualquier tipo de residuo o contaminante que pueda afectar la calidad del agua en tu hogar o negocio.";
        $puntos = array();
        for ($i = 9; $i <= 12; $i++) {
          $puntos[] = array("id" => $i);
        }
        break;
      case "tinacos":
        $titulo = "Lavado y desinfección de tinacos";
        $imagen = "https://cdn-icons-png.flaticon.com/512/7608/7608679.png";
        $descripcion = "Realizamos el lavado y desinfección de tinacos en casas y negocios. Utilizamos productos desinfectantes de alta calidad y equipo especializado para garantizar la eliminación de residuos y contaminantes que puedan afectar la calidad del agua.";
        $puntos = array();
        for ($i = 13; $i <= 15; $i++) {
          $puntos[] = array("id" => $i);
        }
        break;
      case "albercas":
        $titulo = "Limpieza de Albercas";
        $imagen = "https://cdn-icons-png.flaticon.com/512/78/78682.png";
        $descripcion = "Realizamos la limpieza y mantenimiento de albercas en casas y negocios. Contamos con personal capacitado y equipo especializado para mantener el agua de tu alberca limpia y cristalina.
        Desinfectamos el agua, aspiramos los asentamiento, verificamos el pH y limpiamos tu equipo de filtrado";
        $punto1 = "Limpieza de superficie y paredes";
        $punto2 = "Aspirado de sedimentos";
        $punto3 = "Verificación y ajuste de químicos";
        $punto4 = "Limpieza y mantenimiento de equipo de filtrado";
        $punto5 = "Reparaciones menores";
        break;
      case 'administracion':
        $titulo = 'Administración y recolección de recursos monetarios';
        $descripcion = 'Gestión y control de los  recursos monetarios asociados con el mantenimiento y operación del condominio.';
        $imagen = 'https://cdn-icons-png.flaticon.com/512/217/217853.png';
        $punto1 = 'Planificación de presupuesto';
        $punto2 = 'Seguimiento de presupuesto';
        $punto3 = 'Gestión de pagos a proveedores';
        $punto4 = 'Administración efectiva de los recursos';
        $punto5 = 'Asegura la sostenibilidad del condominio';
        break;
      case 'albanileria':
        $titulo = 'Albañilería';
        $descripcion = 'Ofrecemos servicios de albañilería de alta calidad a precios competitivos. Contáctanos para más información.';
        $imagen = 'https://cdn-icons-png.flaticon.com/512/2421/2421989.png';
        $punto1 = 'Reparación y mantenimiento de estructura';
        $punto2 = 'Reparación y mantenimiento de paredes';
        $punto3 = ' Instalación y reparación de pisos y revestimientos';
        $punto4 = 'Construcción y reparación de muros';
        $punto5 = 'Construcción y reparación de columnas';
        break;
      case 'camaras':
        $titulo = 'Cámaras de vigilancia';
        $descripcion = 'Instalamos cámaras de vigilancia de alta calidad para garantizar la seguridad de tus espacios. Contáctanos para más información.';
        $imagen = 'https://cdn-icons-png.flaticon.com/512/36/36311.png';
        $punto1 = ' Instalación de cámaras de seguridad para el condominio';
        $punto2 = 'Monitoreo de cámaras de seguridad para el condominio';
        $punto3 = 'Mantenimiento de sistemas de videovigilancia';
        $punto4 = 'Reparación de sistemas de videovigilancia';
        $punto5 = 'Mantenimiento de las cámaras';
        break;
      case 'comite':
        $titulo = 'Comité de administración';
        $descripcion = 'Comité de administración';
        $imagen = 'https://cdn-icons-png.flaticon.com/512/4420/4420377.png';
        $punto1 = 'Organización y coordinación de reuniones del comité';
        $punto2 = 'Comunicación comunitaria';
        $punto3 = 'Organización de eventos y actividades';
        $punto4 = 'Servicio de mediación y resolución de conflictos';
        $punto5 = ' Participación comunitaria';
        break;

      case "plagas":
        $titulo = "Control de plagas";
        $descripcion = 'Control y exterminio de plagas como insectos, roedores u otros animales no deseados en el condominio.';
        $imagen = "https://cdn-icons-png.flaticon.com/512/2636/2636843.png";
        $punto1 = 'Prevención y asesoramiento para evitar la proliferación de plagas';
        $punto2 = 'Inspección y evaluación';
        $punto3 = 'Control de insectos';
        $punto4 = 'Control de roedores';
        $punto5 = 'Control de plagas de jardín';
        break;
      case "electricista":
        $titulo = "Electricista";
        $descripcion = 'Instalamos cámaras de vigilancia de alta calidad para garantizar la seguridad de tus espacios. Contáctanos para más información.';
        $imagen = "https://cdn-icons-png.flaticon.com/512/1983/1983275.png";
        $punto1 = 'Instalación eléctrica en áreas comunes';
        $punto2 = 'Mantenimiento eléctrico en áreas comunes';
        $punto3 = 'Reparación de fallas eléctricas y cortocircuito';
        $punto4 = 'Solución de problemas eléctricos';
        $punto5 = 'Asesoramiento y recomendaciones para promover el ahorro energético';
        break;
      case "gobierno":
        $titulo = "Gestión de asuntos de gobierno y legales";
        $descripcion = 'Gestión de todos los asuntos legales y regulatorios relacionados con la administración y operación de la comunidad.';
        $imagen = "https://cdn-icons-png.flaticon.com/512/5605/5605882.png";
        $punto1 = 'Cumplimiento de las leyes';
        $punto2 = 'Cumplimiento de regulaciones locales';
        $punto3 = 'Cumplimiento de regulaciones estatales';
        $punto4 = 'Gestión efectiva de los asuntos legales y gubernamentales';
        $punto5 = 'Garantia de la protección de los intereses y derechos';
        break;
      case "limpieza":
        $titulo = "Limpieza de áreas comunes";
        $imagen = "https://cdn-icons-png.flaticon.com/512/2866/2866900.png";
        $descripcion = "Ofrecemos servicios de limpieza y mantenimiento de áreas comunes en edificios y condominios. Contamos con personal capacitado y productos de alta calidad para garantizar la limpieza y desinfección de áreas comunes como escaleras, pasillos y áreas verdes.";
        $punto1 = "Limpieza y desinfección de escaleras y pasillos";
        $punto2 = "Limpieza y mantenimiento de áreas verdes";
        $punto3 = "Recolección y disposición de basura";
        break;
      case 'ventanales':
        $titulo = "Limpieza de ventanales";
        $imagen = "https://cdn-icons-png.flaticon.com/512/6410/6410650.png";
        $descripcion = "Realizamos limpieza de ventanales en edificios y casas, contamos con equipo especializado y personal capacitado para ofrecer el mejor servicio.";
        $punto1 = "Utilizamos productos de alta calidad que no dañan los vidrios ni marcos.";
        $punto2 = "Eliminamos manchas difíciles, polvo y suciedad acumulada en los ventanales.";
        $punto3 = "Ofrecemos servicio a empresas y particulares, con horarios flexibles para adaptarnos a las necesidades de cada cliente.";
        break;
      case 'plomeria':
        $titulo = "Servicio de Plomería";
        $imagen = "https://cdn-icons-png.flaticon.com/512/4635/4635359.png";
        $descripcion = "Ofrecemos servicio de plomería para resolver cualquier problema relacionado con tuberías, desagües, grifos y sanitarios.";
        $punto1 = "Solucionamos fugas de agua en tuberías y llaves de paso.";
        $punto2 = "Desatascamos desagües y alcantarillas.";
        $punto3 = "Instalamos y reparamos sanitarios, grifos y lavaderos.";
        $punto4 = "Trabajamos con materiales de alta calidad y durabilidad.";
        $punto5 = "Ofrecemos servicio de emergencia las 24 horas.";
        break;
      case 'arboles':
        $titulo = "Poda y adorno de árboles";
        $imagen = "https://cdn-icons-png.flaticon.com/512/2174/2174132.png";
        $descripcion = "Realizamos poda y adorno de árboles para mantenerlos saludables y estéticamente atractivos.";
        $punto1 = "Contamos con personal capacitado y herramientas especializadas para realizar podas de alta calidad.";
        $punto2 = "Podamos árboles frutales, ornamentales y forestales.";
        $punto3 = "Realizamos tratamientos fitosanitarios para prevenir plagas y enfermedades en los árboles.";
        $punto4 = "Podamos los árboles de manera responsable, respetando su ciclo de vida y el medio ambiente.";
        break;
      case 'pasto':
        $titulo = "Poda de pasto";
        $imagen = "https://cdn-icons-png.flaticon.com/512/7105/7105088.png";
        $descripcion = "Realizamos poda de pasto para mantener los jardines y áreas verdes en excelentes condiciones.";
        $punto1 = "Contamos con maquinaria especializada para realizar poda de pasto de manera rápida y eficiente.";
        $punto2 = "Realizamos desbroce de maleza y recorte de bordes.";
        $punto3 = "Ofrecemos servicio de mantenimiento de jardines y áreas verdes.";
        break;

      case "puertas":
        $titulo = "Puertas automáticas";
        $imagen = "https://cdn-icons-png.flaticon.com/512/2457/2457981.png";
        $descripcion = "Cuidado de las puertas del condominio al mejor precio";
        $punto1 = " Instalación de puertas de acceso al condominio";
        $punto2 = "Mantenimiento de puertas de acceso al condominio";
        $punto3 = "Reparación de las puerta";
        break;
      case "pulido":
        $titulo = "Pulido de Pisos";
        $imagen = "https://cdn-icons-png.flaticon.com/512/16/16386.png";
        $descripcion = "Para que tú condominios siempre luzcan presentables está es una muy buena opción, con nuestro equipo especializado verá buenos resultados.";
        $punto1 = "Pulido de pisos de áreas comunes";
        $punto2 = "Abrillantado de pisos de áreas comunes";
        $punto3 = "Mantenimiento de superficies pulidas como mármol o granito";
        break;
      case "cuotas":
        $titulo = "Recolección de Cuotas";
        $imagen = "https://cdn-icons-png.flaticon.com/512/2871/2871729.png";
        $descripcion = "Recolección de efectivo en la unidad";
        $punto1 = "Pagos de cuotas de mantenimiento mediante transferencia";
        break;
      default:
        $titulo = 'Servicio no encontrado';
        $descripcion = 'Lo siento, el servicio que estás buscando no está disponible en este momento.';
    }
  } else {
    $titulo = 'Servicio no encontrado';
    $descripcion = 'Lo siento, el servicio que estás buscando no está disponible en este momento.';
  }
  ?>
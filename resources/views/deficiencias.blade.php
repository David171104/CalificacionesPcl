<style>
    .tabs {
        display: flex;
        border-bottom: 2px solid #ddd;
        background-color: #f8f9fa;
        padding: 10px;
    }

    .tab {
        margin-right: 20px;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 16px;
        color: #007bff;
        border: 2px solid transparent;
        border-radius: 4px 4px 0 0;
    }

    .tab.active {
        background-color: #ffffff;
        border-color: #ddd;
        border-bottom-color: #ffffff;
        /* Esconde el borde inferior cuando está activa */
    }

    .main-container {
        display: flex;
    }

    .module-container {
        width: 300px;
        /* Ancho de la columna izquierda */
        margin-right: 20px;
        /* Espacio entre la columna izquierda y derecha */
    }

    .content-container {
        flex-grow: 1;
        /* Ocupa el resto del espacio disponible */
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .module-list {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .module-list li {
        margin: 10px 0;
    }

    .module-button {
        width: 100%;
        padding: 10px 15px;
        font-size: 16px;
        color: #ffffff;
        background-color: #007bff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-align: left;
    }

    .module-button:hover {
        background-color: #0056b3;
    }

    .module-content {
        display: none;
        margin-top: 10px;
        padding: 15px;
        background-color: #e9ecef;
        border-radius: 4px;
    }

    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
    }

    .active {
        display: block;
    }
</style>
<div>
    <div class="tabs">
        <div class="tab active" onclick="showTabContent('deficiencias')">Deficiencias</div>
        <div class="tab" onclick="showTabContent('rol')">Rol</div>
    </div>

    <div id="deficiencias" class="tab-content active">
        <div class="main-container">
            <div class="module-container">
                <ul class="module-list">
                    <li>
                        <button class="module-button" onclick="showContent('content1')">Capítulo 1. Deficiencias por alteraciones debidas a neoplasias o cáncer.</button>
                    </li>
                    <li>
                        <button class="module-button" onclick="showContent('content2')">Capítulo 2. Deficiencias por alteraciones del sistema cardiovascular.</button>
                    </li>
                    <li>
                        <button class="module-button" onclick="showContent('content3')">Capítulo 3. Deficiencias por trastornos del sistema respiratorio.</button>
                    </li>
                    <li>
                        <button class="module-button" onclick="showContent('content4')">Capítulo 4. Deficiencias por alteración del sistema digestivo.</button>
                    </li>
                    <li>
                        <button class="module-button" onclick="showContent('content5')">Capítulo 5. Deficiencias del sistema urinario y reproductor.</button>
                    </li>
                    <li>
                        <button class="module-button" onclick="showContent('content6')">Capítulo 6. Deficiencias por Trastornos de la Piel, Faneras y Daño Estético.</button>
                    </li>
                    <li>
                        <button class="module-button" onclick="showContent('content7')">Capítulo 7. Deficiencias por Alteraciones del Sistema Hematopoyético.</button>
                    </li>
                    <li>
                        <button class="module-button" onclick="showContent('content8')">Capítulo 8. Deficiencia por Alteraciones del Sistema Endocrino.</button>
                    </li>
                    <li>
                        <button class="module-button" onclick="showContent('content9')">Capítulo 9. Deficiencias por Alteraciones del Sistema Auditivo y Vestibular.</button>
                    </li>
                    <li>
                        <button class="module-button" onclick="showContent('content10')">Capítulo 10. Deficiencias por Alteraciones del Olfato, del Gusto, de la Voz, del Habla y de las Vías Aéreas Superiores.</button>
                    </li>
                    <li>
                        <button class="module-button" onclick="showContent('content11')">Capítulo 11. Deficiencias por Alteraciones del Sistema Visual.</button>
                    </li>
                    <li>
                        <button class="module-button" onclick="showContent('content12')">Capítulo 12. Deficiencias por Alteraciones del Sistema Nervioso Central y Periférico.</button>
                    </li>
                    <li>
                        <button class="module-button" onclick="showContent('content13')">Capítulo 13. Deficiencias por Trastornos Mentales y del Comportamiento.</button>
                    </li>
                    <li>
                        <button class="module-button" onclick="showContent('content14')">Capítulo 14. Deficiencia por Alteración de las Extremidades Superiores e Inferiores.</button>
                    </li>
                    <li>
                        <button class="module-button" onclick="showContent('content15')">Capítulo 15. Deficiencia por Alteraciones de la Columna Vertebral y la Pelvis.</button>
                    </li>
                </ul>
            </div>
            <div class="content-container">
                <div id="content1" class="module-content">
                    <h3>Capítulo 1. Deficiencias por alteraciones debidas a neoplasias o cáncer.</h3>
                    <p>Tabla 1.3 Evaluación de la deficiencia concerniente a las enfermedades neoplásicas</p>
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr style="background-color: #007bff; color: #ffffff;">
                                <th style="padding: 10px; border: 1px solid #dddddd;">CLASE FUNCIONAL</th>
                                <th style="padding: 10px; border: 1px solid #dddddd;">Clase 0</th>
                                <th style="padding: 10px; border: 1px solid #dddddd;">Clase 1</th>
                                <th style="padding: 10px; border: 1px solid #dddddd;">Clase 2</th>
                                <th style="padding: 10px; border: 1px solid #dddddd;">Clase 3</th>
                                <th style="padding: 10px; border: 1px solid #dddddd;">Clase 4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding: 10px; border: 1px solid #dddddd; background-color: #e9ecef;">VALORACIÓN DEFICIENCIA</td>
                                <td style="padding: 10px; border: 1px solid #dddddd; text-align: center;">0</td>
                                <td style="padding: 10px; border: 1px solid #dddddd; text-align: center;">2% al 10%</td>
                                <td style="padding: 10px; border: 1px solid #dddddd; text-align: center;">11% al 29%</td>
                                <td style="padding: 10px; border: 1px solid #dddddd; text-align: center;">30% al 64%</td>
                                <td style="padding: 10px; border: 1px solid #dddddd; text-align: center;">65% al 85%</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; border: 1px solid #dddddd; background-color: #e9ecef;">GRADO DE SEVERIDAD (%)</td>
                                <td style="padding: 10px; border: 1px solid #dddddd; text-align: center;">0</td>
                                <td style="padding: 10px; border: 1px solid #dddddd; text-align: center;">2<br>A</td>
                                <td style="padding: 10px; border: 1px solid #dddddd; text-align: center;">6<br>B</td>
                                <td style="padding: 10px; border: 1px solid #dddddd; text-align: center;">10<br>C</td>
                                <td style="padding: 10px; border: 1px solid #dddddd; text-align: center;">11<br>C</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; border: 1px solid #dddddd; background-color: #e9ecef;">Estudios clínicos o resultados de pruebas objetivas</td>
                                <td style="padding: 10px; border: 1px solid #dddddd; text-align: center;">Clasificación TNM</td>
                                <td style="padding: 10px; border: 1px solid #dddddd; text-align: center;">Sin síntomas en la actualidad</td>
                                <td style="padding: 10px; border: 1px solid #dddddd; text-align: center;">Estadio I o Tis<br>(carcinomas "in situ")</td>
                                <td style="padding: 10px; border: 1px solid #dddddd; text-align: center;">Estadio II</td>
                                <td style="padding: 10px; border: 1px solid #dddddd; text-align: center;">Estadio III</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; border: 1px solid #dddddd; background-color: #e9ecef;"></td>
                                <td style="padding: 10px; border: 1px solid #dddddd; text-align: center;"></td>
                                <td style="padding: 10px; border: 1px solid #dddddd; text-align: center;"></td>
                                <td style="padding: 10px; border: 1px solid #dddddd; text-align: center;"></td>
                                <td style="padding: 10px; border: 1px solid #dddddd; text-align: center;"></td>
                                <td style="padding: 10px; border: 1px solid #dddddd; text-align: center;">Estadio IV: Evidencia de metástasis a distancia</td>
                            </tr>
                        </tbody>
                    </table>

                    <form action="{{ route('guardar.calificacion') }}" method="POST">
                        @csrf
                        <input type="hidden" name="connection_name" value="{{ request()->get('connection_name', 1) }}">
                        <input type="hidden" name="request_code" value="{{ request()->get('request_code', 1) }}">
                        

                        <button type="submit" class="btn btn-success">
                            Calificación de PCL
                        </button>
                    </form>

                </div>

                <div class="content-container">
                    <div id="content2" class="module-content">
                        <p>Contenido del Capítulo 2.</p>
                    </div>
                </div>
                <div id="content3" class="module-content">
                    <p>Contenido del Capítulo 3.</p>
                </div>
                <div id="content4" class="module-content">
                    <p>Contenido del Capítulo 4.</p>
                </div>
                <div id="content5" class="module-content">
                    <p>Contenido del Capítulo 5.</p>
                </div>
                <div id="content6" class="module-content">
                    <p>Contenido del Capítulo 6.</p>
                </div>
                <div id="content7" class="module-content">
                    <p>Contenido del Capítulo 7.</p>
                </div>
                <div id="content8" class="module-content">
                    <p>Contenido del Capítulo 8.</p>
                </div>
                <div id="content9" class="module-content">
                    <p>Contenido del Capítulo 9.</p>
                </div>
                <div id="content10" class="module-content">
                    <p>Contenido del Capítulo 10.</p>
                </div>
                <div id="content11" class="module-content">
                    <p>Contenido del Capítulo 11.</p>
                </div>
                <div id="content12" class="module-content">
                    <p>Contenido del Capítulo 12.</p>
                </div>
                <div id="content13" class="module-content">
                    <p>Contenido del Capítulo 13.</p>
                </div>
                <div id="content14" class="module-content">
                    <p>Contenido del Capítulo 14.</p>
                </div>
                <div id="content15" class="module-content">
                    <p>Contenido del Capítulo 15.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="rol" class="tab-content">
        <div class="content-container">
            <h5>Rol</h5>
            <p>Aquí puedes agregar el contenido relacionado con "Rol".</p>
        </div>
    </div>

    <script>
        function showTabContent(tabId) {
            // Ocultar todo el contenido de las pestañas
            var contents = document.getElementsByClassName('tab-content');
            for (var i = 0; i < contents.length; i++) {
                contents[i].classList.remove('active');
            }

            // Remover la clase 'active' de todas las pestañas
            var tabs = document.getElementsByClassName('tab');
            for (var i = 0; i < tabs.length; i++) {
                tabs[i].classList.remove('active');
            }

            // Mostrar el contenido seleccionado y marcar la pestaña como activa
            document.getElementById(tabId).classList.add('active');
            event.target.classList.add('active');
        }

        function showContent(id) {
            // Ocultar todo el contenido de los módulos
            var contents = document.getElementsByClassName('module-content');
            for (var i = 0; i < contents.length; i++) {
                contents[i].classList.remove('active');
            }
            // Mostrar el contenido del módulo seleccionado
            document.getElementById(id).classList.add('active');
        }
    </script>
</div>
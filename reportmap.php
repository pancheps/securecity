
        <div id="map_canvas"></div>
        </div>
    </div>
    <div id="formulario" class="hidden">
        <div id="innerformulario">
        <form action="#">
        <div>
        <label>Delito: </label>
        <select name="delito" id="delito">
        <option value="0">Robo de vehículo</option>
        <option value="1">Hurto</option>
        <option value="2">Robo de casa</option>
        <option value="3">Asalto con arma de fuego</option>
        <option value="4">Asalto con arma blanca</option>
        <option value="5">Secuestro</option>
        <option value="6">Asesinato</option>
        <option value="7">Violaciones</option>
        <option value="8">Ebriedad en público</option>
        <option value="9">Venta de estupefacientes</option>
        </select>
        </div>
        <div>
        <label>Hora</label> <input type="text" name="hora" id="hora" />
        </div>
        <div>
        <label>Fecha</label> <input type="text" name="fecha" id="fecha" />
        </div>
        <div>
        <input type="button" value="Enviar" onclick="HideAndSend();" />
        <input type="button" value="Cancelar" onclick="Hide();" />
        </div>
        </form>
        </div>
    </div>

const ctrselectUnit = document.getElementById('selectUnit');
const ctr = document.getElementById('ctr1stDose')
const ctrSelectEveryOnce = document.getElementById('ctrSelectEveryOnce');
var oneDose = `<div class="form-floating cs-form mb-3" id="ctr1stDose">
<input type="time" class="form-control" value="" id="selectTime"  name="one">
<label for="selectTime">¿Cuándo necesita usted tomar la primera dosis?</label>
</div>`
var twoDoses = `<div class="form-floating cs-form mb-3" id="ctr1stDose">
<input type="time" class="form-control" value="" id="selectTime" name="one">
<label for="selectTime">¿Cuándo necesita usted tomar la primera dosis?</label>
</div>
<div class="form-floating cs-form mb-3">
<input type="time" class="form-control" value="" id="selectTime" name="two">
<label for="selectTime">¿Cuándo necesita usted tomar la segunda dosis?</label>
</div>`
var threeDoses = `<div class="form-floating cs-form mb-3" id="ctr1stDose">
<input type="time" class="form-control" value="" id="selectTime" name="one">
<label for="selectTime">¿Cuándo necesita usted tomar la primera dosis?</label>
</div>
<div class="form-floating cs-form mb-3">
<input type="time" class="form-control" value="" id="selectTime" name="two">
<label for="selectTime">¿Cuándo necesita usted tomar la segunda dosis?</label>
</div>
<div class="form-floating cs-form mb-3">
<input type="time" class="form-control" value="" id="selectTime" name="three">
<label for="selectTime">¿Cuándo necesita usted tomar la tercera dosis?</label>
</div>`
var fourDoses = `<div class="form-floating cs-form mb-3" id="ctr1stDose">
<input type="time" class="form-control" value="" id="selectTime" name="one">
<label for="selectTime">¿Cuándo necesita usted tomar la primera dosis?</label>
</div>
<div class="form-floating cs-form mb-3">
<input type="time" class="form-control" value="" id="selectTime" name="two">
<label for="selectTime">¿Cuándo necesita usted tomar la segunda dosis?</label>
</div>
</div><div class="form-floating cs-form mb-3">
<input type="time" class="form-control" value="" id="selectTime" name="three">
<label for="selectTime">¿Cuándo necesita usted tomar la tercera dosis?</label>
</div>
</div><div class="form-floating cs-form mb-3">
<input type="time" class="form-control" value="" id="selectTime" name="four">
<label for="selectTime">¿Cuándo necesita usted tomar la cuarta dosis?</label>
</div>`
var sixDoses = `<div class="form-floating cs-form mb-3" id="ctr1stDose">
<input type="time" class="form-control" value="" id="selectTime" name="one">
<label for="selectTime">¿Cuándo necesita usted tomar la primera dosis?</label>
</div>
<div class="form-floating cs-form mb-3">
<input type="time" class="form-control" value="" id="selectTime" name="two">
<label for="selectTime">¿Cuándo necesita usted tomar la segunda dosis?</label>
</div>
<div class="form-floating cs-form mb-3">
<input type="time" class="form-control" value="" id="selectTime" name="three">
<label for="selectTime">¿Cuándo necesita usted tomar la tercera dosis?</label>
</div>
</div><div class="form-floating cs-form mb-3">
<input type="time" class="form-control" value="" id="selectTime" name="four">
<label for="selectTime">¿Cuándo necesita usted tomar la cuarta dosis?</label>
</div>
</div><div class="form-floating cs-form mb-3">
<input type="time" class="form-control" value="" id="selectTime" name="five">
<label for="selectTime">¿Cuándo necesita usted tomar la quinta dosis?</label>
</div>
</div><div class="form-floating cs-form mb-3">
<input type="time" class="form-control" value="" id="selectTime" name="six">
<label for="selectTime">¿Cuándo necesita usted tomar la sexta dosis?</label>
</div>`
var everySixHours = `<div class="form-floating cs-form mb-3" id="ctr1stDose">
<input type="time" class="form-control" value="" id="selectTime" name="sixhours">
<label for="selectTime">¿Cuándo necesita usted tomar su primera dosis?</label>
</div>`;
var aux;
var aux2;

// Función para mostrar la unidad de medida dependiendo de la opcion seleccionada en tipo
function selectUnit() {
    var selectValue = document.getElementById("floatingSelectType").value;
    if (selectValue == "Pastilla") {
        ctrselectUnit.innerHTML = `<select class="form-select" id="floatingSelectGrid" name="Pastilla">
        <option selected>Elige la unidad</option>
        <option value="g">g</option>
        <option value="IU">IU</option>
        <option value="mcg">mcg</option>
        <option value="mEq">mEq</option>
    </select>
    <label for="floatingSelectGrid">Unidad</label>`;
    }
    if (selectValue == "Solución") {
        ctrselectUnit.innerHTML = `<select class="form-select" id="floatingSelectGrid" name="Solución">
        <option selected>Elige la unidad</option>
        <option value="g">g</option>
        <option value="IU">IU</option>
        <option value="mcg-ml">mcg-ml</option>
        <option value="mEq">mEq</option>
        <option value="mg">mg</option>
        <option value="mg/ml">mg/ml</option>
        <option value="mL">mL</option>
        <option value="%">%</option>
    </select>
    <label for="floatingSelectGrid">Unidad</label>`;
    }
    if (selectValue == "Inyección") {
        ctrselectUnit.innerHTML = `<select class="form-select" id="floatingSelectGrid" name="Inyección">
        <option selected>Elige la unidad</option>
        <option value="IU">IU</option>
        <option value="mcg">mcg</option>
        <option value="mcg/ml">mcg/ml</option>
        <option value="mEq">mEq</option>
        <option value="mg">mg</option>
        <option value="mg/ml">mg/ml</option>
        <option value="mL">mL</option>
        <option value="%">%</option>
    </select>
    <label for="floatingSelectGrid">Unidad</label>`;
    }
    if (selectValue == "Polvo") {
        ctrselectUnit.innerHTML = `<select class="form-select" id="floatingSelectGrid" name="Polvo">
        <option selected>Elige la unidad</option>
        <option value="g">g</option>
        <option value="mcg">mcg</option>
        <option value="mg">mg</option>
    </select>
    <label for="floatingSelectGrid">Unidad</label>`;
    }
    if (selectValue == "Gotas") {
        ctrselectUnit.innerHTML = `<select class="form-select" id="floatingSelectGrid" name="Gotas">
        <option selected>Elige la unidad</option>
        <option value="IU">IU</option>
        <option value="mcg">mcg</option>
        <option value="mcg/ml">mcg/ml</option>
        <option value="mEq">mEq</option>
        <option value="mg/ml">mg/ml</option>
        <option value="%">%</option>
    </select>
    <label for="floatingSelectGrid">Unidad</label>`;
    }
    if (selectValue == "Inhalador") {
        ctrselectUnit.innerHTML = `<select class="form-select" id="floatingSelectGrid" name="Inhalador">
        <option selected>Elige la unidad</option>
        <option value="mg">mg</option>
        <option value="mg/ml">mg/ml</option>
    </select>
    <label for="floatingSelectGrid">Unidad</label>`;
    }
    if (selectValue == "Otros") {
        ctrselectUnit.innerHTML = `<select class="form-select" id="floatingSelectGrid" name="Otros">
        <option selected>Elige la unidad</option>
        <option value="Por boca">Por boca</option>
        <option value="Tópico(a) (en la piel)">Tópico(a) (en la piel)</option>
        <option value="Por la nariz / en los ojos / los oidos">Por la nariz / en los ojos / los oidos</option>
        <option value="Inhalado">Inhalado</option>
        <option value="Por una inyección">Por una inyección</option>
        <option value="Por el recto / la vagina">Por el recto / la vagina</option>
    </select>
    <label for="floatingSelectGrid">Unidad</label>`;
    }
}

// Función para mostrar o no la opción para la selección de cuantas veces al día dependiendo de la opción seleccionada en la pregunta 5
function isEveryday() {
    var selectValue = document.getElementById("floatingSelectEveryday").value;
    if (selectValue == "Sí") {
        ctrSelectEveryOnce.innerHTML = `<select class="form-select" id="floatingSelectEveryOnce"
        aria-label="Floating label select example" name="frecuencia" onchange="newDosis()">
        <option selected>Eliga una opción</option>
        <option value="Una vez al día">Una vez al día</option>
        <option value="Dos veces al día">Dos veces al día</option>
        <option value="3 veces al día">3 veces al día</option>
        <option value="4 veces al día">4 veces al día</option>
        <option value="6 veces al día">6 veces al día</option>
        <option value="Cada 6 horas">Cada 6 horas</option>
        <option value="Solo según sea necesario">Solo según sea necesario</option>
        <option value="Otro(a)">Otro(a)</option>
    </select>
    <label for="floatingSelectEveryOnce">¿Con qué frecuencia lo/la toma?</label>`;
    }
    if (selectValue == "No") {
        ctrSelectEveryOnce.innerHTML = "";
    }
    if (selectValue == "Solo según sea necesario") {
        ctrSelectEveryOnce.innerHTML = "";
    }
}

// Función para mostrar la selección de horas dependiendo de la opción seleccionada en la pregunta 6
function newDosis() {
    var selectValue = document.getElementById("floatingSelectEveryOnce").value;
    if (selectValue == "Una vez al día") {
        ctr.innerHTML = oneDose;
    }
    if (selectValue == "Dos veces al día") {
        ctr.innerHTML = twoDoses;
    }
    if (selectValue == "3 veces al día") {
        ctr.innerHTML = threeDoses;
    }
    if (selectValue == "4 veces al día") {
        ctr.innerHTML = fourDoses;
    }
    if (selectValue == "6 veces al día") {
        ctr.innerHTML = sixDoses;
    }
    if (selectValue == "Cada 6 horas") {
        ctr.innerHTML = everySixHours;
    }
    if (selectValue == "Solo según sea necesario") {
        ctr.innerHTML = "";
    }
 
}


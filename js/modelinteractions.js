window.onload = function () {
  initializeModels();
};

function initializeModels() {
  const modelIDs = [
    "x3dModelCoke",
    "x3dModelPepper",
    "x3dModelFanta",
    "x3dModelFantaBlue",
  ];
  // Hide all models initially except the first one
  modelIDs.forEach((id, index) => {
    const modelElement = document.getElementById(id);
    modelElement.style.display = index === 0 ? "block" : "none";
  });
  document.getElementById("details1").style.display = "block";
}

// Assuming modelIndex is a global variable keeping track of the currently displayed model
var modelIndex = 0; // Default to the first model

function switchModel(index) {
  const modelIDs = [
    "x3dModelCoke",
    "x3dModelPepper",
    "x3dModelFanta",
    "x3dModelFantaBlue",
  ];
  const dataIDs = ["details1", "details2", "details3", "details4"];
  modelIDs.forEach((id, idx) => {
    const modelElement = document.getElementById(id);
    modelElement.style.display = idx === index ? "block" : "none";
  });
  dataIDs.forEach((id, idx) => {
    const dataElement = document.getElementById(id);
    dataElement.style.display = idx === index ? "block" : "none";
  });
  modelIndex = index; // Update current model index
}

function cameraFront() {
  document
    .getElementById("x3dModelCoke__View_Front_Camera")
    .setAttribute("bind", "true");

  document
    .getElementById("x3dModelPepper__View_Front_Camera")
    .setAttribute("bind", "true");

  document
    .getElementById("x3dModelFanta__View_Front_Camera")
    .setAttribute("bind", "true");

  document
    .getElementById("x3dModelFantaBlue__View_Front_Camera")
    .setAttribute("bind", "true");
}

function cameraBack() {
  document
    .getElementById("x3dModelCoke__View_Back_Camera")
    .setAttribute("bind", "true");

  document
    .getElementById("x3dModelPepper__View_Back_Camera")
    .setAttribute("bind", "true");

  document
    .getElementById("x3dModelFanta__View_Back_Camera")
    .setAttribute("bind", "true");

  document
    .getElementById("x3dModelFantaBlue__View_Back_Camera")
    .setAttribute("bind", "true");
}
function cameraTop() {
  document
    .getElementById("x3dModelCoke__View_Top_Camera")
    .setAttribute("bind", "true");

  document
    .getElementById("x3dModelPepper__View_Top_Camera")
    .setAttribute("bind", "true");

  document
    .getElementById("x3dModelFanta__View_Top_Camera")
    .setAttribute("bind", "true");

  document
    .getElementById("x3dModelFantaBlue__View_Top_Camera")
    .setAttribute("bind", "true");
}

function toggleWireFrame() {
  var cokex3d = document.getElementById("x3dModelCoke");
  var pepperx3d = document.getElementById("x3dModelPepper");
  var fantax3d = document.getElementById("x3dModelFanta");
  var fantabluex3d = document.getElementById("x3dModelFantaBlue");

  cokex3d.runtime.togglePoints(true);
  cokex3d.runtime.togglePoints(true);

  pepperx3d.runtime.togglePoints(true);
  pepperx3d.runtime.togglePoints(true);

  fantax3d.runtime.togglePoints(true);
  fantax3d.runtime.togglePoints(true);

  fantabluex3d.runtime.togglePoints(true);
  fantabluex3d.runtime.togglePoints(true);
}

function spin() {
  spinning = !spinning;
  document
    .getElementById("x3dModelCoke__Timer")
    .setAttribute("enabled", spinning.toString());
  document
    .getElementById("x3dModelPepper__Timer")
    .setAttribute("enabled", spinning.toString());
  document
    .getElementById("x3dModelFanta__Timer")
    .setAttribute("enabled", spinning.toString());

  document
    .getElementById("x3dModelFantaBlue__Timer")
    .setAttribute("enabled", spinning.toString());
}

function stopAnimation() {
  spinning = false;
  document
    .getElementById("x3dModelCoke__Timer")
    .setAttribute("enabled", spinning.toString());
  document
    .getElementById("x3dModelPepper__Timer")
    .setAttribute("enabled", spinning.toString());
  document
    .getElementById("x3dModelFanta__Timer")
    .setAttribute("enabled", spinning.toString());
  document
    .getElementById("x3dModelFantaBlue__Timer")
    .setAttribute("enabled", spinning.toString());
}

var lightOn1 = true;
var lightOn2 = true;
var lightOn3 = true;

function light1() {
  // var lightOn1 = document.getElementById('model__LIGHT_Light_1').getAttribute('on');
  document
    .getElementById("x3dModelCoke__LIGHT_Light")
    .setAttribute("on", lightOn1.toString());
  document
    .getElementById("x3dModelPepper__LIGHT_Light")
    .setAttribute("on", lightOn1.toString());
  document
    .getElementById("x3dModelFanta__LIGHT_Light")
    .setAttribute("on", lightOn1.toString());
  document
    .getElementById("x3dModelFantaBlue__LIGHT_Light")
    .setAttribute("on", lightOn1.toString());
}

function light2() {
  lightOn2 = !lightOn2;
  document
    .getElementById("x3dModelCoke__LIGHT_Light_1")
    .setAttribute("on", lightOn2.toString());
  document
    .getElementById("x3dModelPepper__LIGHT_Light_1")
    .setAttribute("on", lightOn2.toString());
  document
    .getElementById("x3dModelFanta__LIGHT_Light_1")
    .setAttribute("on", lightOn2.toString());
  document
    .getElementById("x3dModelFantaBlue__LIGHT_Light_1")
    .setAttribute("on", lightOn1.toString());
}

function light3() {
  lightOn3 = !lightOn3;
  document
    .getElementById("x3dModelCoke__LIGHT_Light_2")
    .setAttribute("on", lightOn3.toString());
  document
    .getElementById("x3dModelPepper__LIGHT_Light_2")
    .setAttribute("on", lightOn3.toString());
  document
    .getElementById("x3dModelFanta__LIGHT_Light_2")
    .setAttribute("on", lightOn3.toString());
  document
    .getElementById("x3dModelFantaBlue__LIGHT_Light_2")
    .setAttribute("on", lightOn1.toString());
}

function turnOffAllLights() {
  document
    .getElementById("x3dModelCoke__LIGHT_Light")
    .setAttribute("on", "false");
  document
    .getElementById("x3dModelCoke__LIGHT_Light_1")
    .setAttribute("on", "false");
  document
    .getElementById("x3dModelCoke__LIGHT_Light_2")
    .setAttribute("on", "false");

  document
    .getElementById("x3dModelPepper__LIGHT_Light")
    .setAttribute("on", "false");
  document
    .getElementById("x3dModelPepper__LIGHT_Light_1")
    .setAttribute("on", "false");
  document
    .getElementById("x3dModelPepper__LIGHT_Light_2")
    .setAttribute("on", "false");

  document
    .getElementById("x3dModelFanta__LIGHT_Light")
    .setAttribute("on", "false");
  document
    .getElementById("x3dModelFanta__LIGHT_Light_1")
    .setAttribute("on", "false");
  document
    .getElementById("x3dModelFanta__LIGHT_Light_2")
    .setAttribute("on", "false");

  document
    .getElementById("x3dModelFantaBlue__LIGHT_Light")
    .setAttribute("on", "false");
  document
    .getElementById("x3dModelFantaBlue__LIGHT_Light_1")
    .setAttribute("on", "false");
  document
    .getElementById("x3dModelFantaBlue__LIGHT_Light_2")
    .setAttribute("on", "false");
}

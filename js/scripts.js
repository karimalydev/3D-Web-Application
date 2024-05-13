var rotationSpeed = Math.PI / 18; // 10 degrees in radians
var animationInterval = null;
var isWireframe = false; // Initialize wireframe state as false initially

function switchModel(drink) {
  var baseUrl = "../assets/models/";
  var modelMap = {
    coke: "coke.x3d",
    pepper: "pepper.x3d",
    fantablue: "fantablue.x3d",
    fanta: "fanta.x3d",
  };
  var modelElement = document.getElementById("model");
  modelElement.setAttribute("url", baseUrl + modelMap[drink]);

  modelElement.onload = function () {
    resetTransformations(); // Reset transformations when model is changed
    console.log(drink + " model loaded.");
  };
}

function resetTransformations() {
  var transform = document.getElementById("modelTransform");
  if (transform) {
    transform.setAttribute("translation", "0 0 0"); // Reset position
    transform.setAttribute("rotation", "0 0 1 0"); // Reset rotation
    transform.setAttribute("scale", "1 1 1"); // Reset scale
  }
}

window.onload = function () {
  switchModel("coke"); // Initialize with the Coke model on page load
};

function initializeViewpoint() {
  // Wait a bit after the model loads to access the runtime scene
  setTimeout(() => {
    var runtime = document.getElementById("model").runtime;
    if (runtime) {
      var viewpoints = runtime.canvas.doc._viewpoints; // Accessing the internal viewpoints array
      if (viewpoints && viewpoints.length > 0) {
        runtime.showAll(); // Alternatively, bind the first viewpoint
        console.log("Viewpoint initialized.");
      } else {
        console.error("No viewpoints found in the model.");
      }
    } else {
      console.error("X3DOM runtime is not available.");
    }
  }, 500); // Delay to ensure the scene is fully processed
}

function resetRotation() {
  var transform = document.getElementById("modelTransform");
  if (transform) {
    transform.setAttribute("rotation", "0 1 0 0");
  } else {
    console.error("Transform element not found.");
  }
}

window.addEventListener("load", function () {
  // Ensure everything is loaded before applying any JavaScript
  console.log("All resources finished loading!");
});

function toggleWireframe() {
  var x3dElement = document.querySelector("x3d"); // Access the x3d element directly
  var runtime = x3dElement.runtime; // Access the X3DOM runtime from the x3d element

  isWireframe = !isWireframe; // Toggle the wireframe state

  if (runtime) {
    runtime.togglePoints(isWireframe);
    runtime.toggleWireframe(isWireframe);
  } else {
    console.error("X3DOM runtime is not available.");
  }
}

function rotateModel(direction) {
  var transform = document.getElementById("modelTransform");
  var currentRotation = transform.getAttribute("rotation");
  if (!currentRotation) {
    // Set a default rotation if none exists
    transform.setAttribute("rotation", "0 1 0 0");
    currentRotation = "0 1 0 0";
  }
  var rotationParts = currentRotation.split(" ");
  var angle = parseFloat(rotationParts[3]);
  if (isNaN(angle)) angle = 0; // If the angle isn't a number, reset to 0

  angle += direction === "right" ? rotationSpeed : -rotationSpeed;
  transform.setAttribute("rotation", "0 1 0 " + angle);
  console.log("New rotation: ", transform.getAttribute("rotation"));
}

function startAnimation() {
  stopAnimation(); // Ensure no previous animations are running
  animationInterval = setInterval(function () {
    rotateModel("right");
  }, 100); // Adjust interval for smoother animation
}

function stopAnimation() {
  if (animationInterval) {
    clearInterval(animationInterval);
  }
}
document.addEventListener("DOMContentLoaded", function () {
  var modal = document.getElementById("modelModal");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  var span = document.getElementsByClassName("close")[0]; // The close button

  var buttons = document.querySelectorAll(".see-model");

  buttons.forEach((button) => {
    button.onclick = function () {
      var card = this.closest(".card"); // Find the closest parent with the class 'card'
      if (!card) {
        console.error("Card container not found for the model button.");
        return;
      }

      var img = card.querySelector(".card-img-top"); // Find the image within that card
      if (!img) {
        console.error("Image not found in the card.");
        return;
      }

      var imgSrc = img.src; // Get image source
      var imgAlt = img.alt; // Get alt text from the image

      modal.style.display = "block";
      modalImg.src = imgSrc;
      captionText.innerHTML = imgAlt; // Use the alt text as the caption
    };
  });

  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
    modal.style.display = "none";
  };
});

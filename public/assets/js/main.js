document.addEventListener("DOMContentLoaded", () => {
  const takeFormNovelics = document.querySelector("#take-form-novelics");

  takeFormNovelics.addEventListener("submit", (e) => {
    let nombre = takeFormNovelics.querySelector("#nombre").value;
    let apellido = takeFormNovelics.querySelector("#apellido").value;
    let correo = takeFormNovelics.querySelector("#email").value;
    let telefono = takeFormNovelics.querySelector("#phone").value;
    let edad = takeFormNovelics.querySelector("#edad").value;
    //console.log(nombre, apellido, correo, telefono, edad);
    let data = new FormData();
    data.append("nombre", nombre);
    data.append("apellido", apellido);
    data.append("correo", correo);
    data.append("telefono", telefono);
    data.append("edad", edad);
    console.log(data);
    e.preventDefault();
    fetch(ajaxNovelics, { method: "POST", body: data })
      .then(function (response) {
        return response.text();
      })
      .then(function (body) {
        console.log(body);
      });
  });
});

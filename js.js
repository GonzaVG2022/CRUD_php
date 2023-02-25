if (window.location.search.includes('ok_user')) {
    const successMessage = document.createElement('h4');
    successMessage.innerText = 'El usuario se cargó con éxito';
    successMessage.classList.add('mensaje-exito');
    document.getElementById('mensaje').appendChild(successMessage);
    setTimeout(() => {
      successMessage.style.display = 'none';
    }, 5000); // Oculta el mensaje después de 5 segundos
  }
  
  if (window.location.search.includes('delete')) {
    const successMessage = document.createElement('h4');
    successMessage.innerText = 'El usuario se elimino con éxito';
    successMessage.classList.add('mensaje-exito-del');
    document.getElementById('mensaje').appendChild(successMessage);
    setTimeout(() => {
      successMessage.style.display = 'none';
    }, 5000); // Oculta el mensaje después de 5 segundos
  }
  if (window.location.search.includes('udate')) {
    const successMessage = document.createElement('h4');
    successMessage.innerText = 'El usuario se modifico con éxito';
    successMessage.classList.add('mensaje-exito');
    document.getElementById('mensaje').appendChild(successMessage);
    setTimeout(() => {
      successMessage.style.display = 'none';
    }, 5000); // Oculta el mensaje después de 5 segundos
  }
const forms = document.querySelectorAll('#form-js')


forms.forEach(form => {
    form.addEventListener('submit',function (e) { 
        e.preventDefault(); //evites les envoie de formulaire en get
       let url = this.getAttribute('action')  ;
       let token = document.querySelector('meta[name="csrf-token"]').content;
       let albumid = this.querySelector('#album-id-js').value;
       let count = this.querySelector('#count-js');
    //    console.log(albumid);
      
      fetch(url, {
          method: 'post',
          headers:{
              'content-type': 'application/json',

              'X-CSRF-TOKEN' : token

          },
          
          body : JSON.stringify({
              id: albumid
          })

      }).then(response => {
            response.json().then( data =>{
                   count.innerHTML = data.count +" j'aimes";
                })
        //   console.log(response)
      }).catch(error =>{
          console.log(error)
      });
    });
});
// console.log(forms);
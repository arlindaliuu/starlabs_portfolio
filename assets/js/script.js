
        const welcomeArr = ["Welcome to my portfolio", "Miresevini ne portfolion time"];
        var x = document.getElementById('title');
        let text = '';
        let loopNum = 0;
        let index = 1;
        let isDeleting = false;
        let delta = (300 - Math.random() * 30);
        
        function tick() { 
        
        let i = loopNum % welcomeArr.length;
        let fullText = welcomeArr[i];
        let updatedText = isDeleting ? fullText.substring(0, text.length - 1) : fullText.substring(0, text.length + 1)
        text = updatedText;

        if(isDeleting){
            delta = delta / 2;
            check = true;
        }
        if(!isDeleting && updatedText === fullText){
            isDeleting = true;
            index = index - 1; 
        }
        else if(isDeleting && updatedText === ''){
            isDeleting = false;
            loopNum += 1;
            index = 1;
            delta = 500;
            
        }else{
            index += 1;
        }
        return x.innerHTML = text;
      }

     
        let ticker = setInterval(()=>{
        tick() 
        },delta)

        window.addEventListener('scroll', function() {
            if(this.scrollY > 100){
            let header = this.document.getElementById('header')
            let scroll = scrollY
            header.classList.add('onscroll')
            }else{
                header.classList.remove('onscroll')
            }
          });


          var fotoArray = [
            "../../assets/img/photo.png",
            "../../assets/img/photo1.png",
        ]
        
        var i = 0;
        
        function ndrroImg() {
            var x = document.getElementById('slideshow').src = fotoArray[i];
            if (i < fotoArray.length - 1) {
                i++;
            } else {
                i = 0;
            }
            setTimeout('ndrroImg()', 3000);
        
        }
        document.body.addEventListener('load', ndrroImg());
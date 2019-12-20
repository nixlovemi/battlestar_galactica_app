import { Injectable } from '@angular/core';
import { AlertController, LoadingController, Events, Platform } from '@ionic/angular';
import { Storage } from '@ionic/storage';

@Injectable({
  providedIn: 'root'
})
export class UtilsService {
  arrCards = [];

  constructor(
    private alertCtr: AlertController,
    private loadingCtr: LoadingController,
    private storage: Storage,
    private events: Events,
    public platform: Platform,
  ) { }

  setArrCards(arrCards)
  {
    this.arrCards = arrCards;
  }

  getArrCards()
  {
    return this.arrCards;
  }

  getArrMenu()
  {
    var arrMenu = [];

    var item    = {
      nome:'Almirante',
      path:'admiral',
    };
    arrMenu.push(item);

    var item    = {
      nome:'Crise',
      path:'crisis',
    };
    arrMenu.push(item);

    var item    = {
      nome:'Destino',
      path:'destination',
    };
    arrMenu.push(item);

    var item    = {
      nome:'Lealdade',
      path:'loyalty',
    };
    arrMenu.push(item);

    var item    = {
      nome:'Perícia',
      path:'skill',
    };
    arrMenu.push(item);

    var item    = {
      nome:'Personagens',
      path:'character',
    };
    arrMenu.push(item);

    var item    = {
      nome:'Presidente',
      path:'president',
    };
    arrMenu.push(item);

    var item    = {
      nome:'Quorum',
      path:'quorum',
    };
    arrMenu.push(item);

    var item    = {
      nome:'Super Crise',
      path:'super_crisis',
    };
    arrMenu.push(item);

    var item    = {
      nome:'Tabuleiro',
      path:'location',
    };
    arrMenu.push(item);

    return arrMenu;
  }

  getAppVersion()
  {
    return '1.0.0';
  }

  async showAlert(header, subHeader, message, buttons)
  {
    const alert = await this.alertCtr.create({
      header: header,
      subHeader: subHeader,
      message: message,
      buttons: buttons,

    });
    return await alert.present();
  }

  async getLoader(message, spinner)
  {
    return await this.loadingCtr.create({
      message: message,
      spinner: spinner,
    }).then((res) => {
      res.present();

      let TIME_IN_MS = 3000;
      let hideFooterTimeout = setTimeout( () => {
        this.closeLoader();
      }, TIME_IN_MS);
    });
  }

  async closeLoader()
  {
    try {
      return await this.loadingCtr.dismiss();
    }
    catch(err) {
      return;
    }
  }

  /*
  date: tem que ser no formato ISO String (new Date().toISOString())
  2011-10-05T14:48:00.000Z
  */
  formatDate(date, format='YYYY-MM-DD')
  {
    let strDate = '' + date.replace('Z', '');
    let ano     = strDate.substr(0, 4);
    let mes     = strDate.substr(5, 2);
    let dia     = strDate.substr(8, 2);
    let hora    = strDate.substr(11, 2);
    let minuto  = strDate.substr(14, 2);
    let segundo = strDate.substr(17, 2);

    let strDateFmt  = format.replace('YYYY', ano).replace('MM', mes).replace('DD', dia).replace('HH', hora).replace('MI', minuto).replace('SS', segundo);
    return strDateFmt;
  }

  /*
  * valor: valor desejado para a formatação
  * decimais: quantidade de casas decimais, por padrão será 2
  * simbolo: tipo de moeda, por padrão é vazia
  */
  formatMoney(valor, decimais = 2, simbolo = '')
  {
    if (isNaN(valor)) return '';
    else {
      let vValor = parseFloat(valor);
      let numero = vValor.toFixed(decimais).split('.');
      numero[0] = simbolo + numero[0].split(/(?=(?:...)*$)/).join('.');
      return numero.join(',');
    }
  }

  acerta_moeda(valor)
  {
    return parseFloat( valor.replace('.', '').replace(',', '.') );
  }

  showBanner()
  {
    /*let adId;
    if (this.platform.is('android')) {
      // adId = 'ca-app-pub-3940256099942544/6300978111'; // ID de testes
      adId = 'ca-app-pub-9051401060868246/4952405598';
    } else if (this.platform.is('ios')) {
      // adId = 'ca-app-pub-3940256099942544/2934735716'; // ID de testes
      adId = 'ca-app-pub-9051401060868246/4110097217';
    }
    this.admob.createBanner({
      adId: adId,
      isTesting: false // remove in production
    })
    .then(() => {
      this.admob.showBanner(this.admob.AD_POSITION.BOTTOM_CENTER);
    })
    .catch((err) => {
      console.log(err);
    });*/
  }
}

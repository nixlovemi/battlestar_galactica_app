import { Component } from '@angular/core';

import { Platform } from '@ionic/angular';
import { SplashScreen } from '@ionic-native/splash-screen/ngx';
import { StatusBar } from '@ionic-native/status-bar/ngx';

import { UtilsService } from './utils.service';

@Component({
  selector: 'app-root',
  templateUrl: 'app.component.html',
  styleUrls: ['app.component.scss']
})
export class AppComponent {
  constructor(
    private platform: Platform,
    private splashScreen: SplashScreen,
    private statusBar: StatusBar,
    private utilsSrv: UtilsService,
  ) {
    this.initializeApp();
  }

  initializeApp() {
    this.platform.ready().then(() => {
      this.loadCards();

      this.statusBar.styleDefault();
      this.splashScreen.hide();
    });
  }

  private loadCards()
  {
    fetch('../../assets/database.json').then(res => res.json()).then(jsonCards => {
      this.utilsSrv.setArrCards(jsonCards);
    });
  }
}

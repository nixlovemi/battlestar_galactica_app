import { Component } from '@angular/core';
import { IonRouterOutlet } from '@ionic/angular';

import { UtilsService } from '../utils.service';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {
  vHeader  = '';
  vCards   = [];
  vArrMenu = [];

  constructor(
    public utilsSrv: UtilsService,
    private routerOutlet: IonRouterOutlet,
  ) {}

  ngOnInit()
  {
    this.vHeader  = 'Battlestar Galactica Tradução';
    this.vCards   = this.utilsSrv.getArrCards();
    this.vArrMenu = this.utilsSrv.getArrMenu();
  }

  ionViewWillLeave()
  {
    this.routerOutlet.swipeGesture = true;
  }

  async ionViewWillEnter()
  {
    this.routerOutlet.swipeGesture = false;
    this.showBanner();
  }

  async ionViewDidLoad()
  {

  }

  showBanner()
  {
    this.utilsSrv.showBanner();
  }
}

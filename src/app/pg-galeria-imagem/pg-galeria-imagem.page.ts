import { Component, OnInit } from '@angular/core';
import { ModalController, NavParams } from '@ionic/angular';
import { StatusBar } from '@ionic-native/status-bar/ngx';

@Component({
  selector: 'app-pg-galeria-imagem',
  templateUrl: './pg-galeria-imagem.page.html',
  styleUrls: ['./pg-galeria-imagem.page.scss'],
})
export class PgGaleriaImagemPage implements OnInit {
  imagens = [];
  idx     = 0;
  slideOpts = {
    initialSlide: 1,
    speed: 400,
  };
  titulo = '';

  constructor(
    private modalController: ModalController,
    navParams: NavParams,
    private statusBar: StatusBar
  ) {
    this.imagens = navParams.get('imagem');
    this.titulo  = navParams.get('titulo');

    this.slideOpts.initialSlide = (this.idx - 1);
  }

  ngOnInit() {
    this.statusBar.overlaysWebView(true);
    this.statusBar.styleLightContent();
    this.statusBar.backgroundColorByHexString('#ffffff');
  }

  closeModal() {
    this.statusBar.styleDefault();
    this.modalController.dismiss();
  }
}

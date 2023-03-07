// demo component that creates a console note
//  after ~500ms pass from page load.
export class DisplaySiteCredit {
  async init() {
    setTimeout(()=> {
      console.info('A REBUILD Website.');
    }, 500);
  }
}

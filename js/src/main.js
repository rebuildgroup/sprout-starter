import 'bootstrap';

import { DisplaySiteCredit } from './components/SiteCredit';

let Main = {
  init: async function () {
    // initialize demo javascript component - async/await invokes some 
    //  level of babel transformation
    const displayCredit = new DisplaySiteCredit();
    await displayCredit.init();

  }
};

Main.init();
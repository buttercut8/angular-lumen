import { AppLumenPage } from './app.po';

describe('app-lumen App', function() {
  let page: AppLumenPage;

  beforeEach(() => {
    page = new AppLumenPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});

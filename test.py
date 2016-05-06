class AjaxTest(BlogHandler):
    def get(self):
        user = self.get_user()       
        self.render('ajaxtest.html', user = user)
    def post(self):
        user = self.get_user()
        word = self.request.get('w')
        logging.info(word)
        return '<p>The secret word is' + word + '<p>'
        #having print instead of return didn't do anything
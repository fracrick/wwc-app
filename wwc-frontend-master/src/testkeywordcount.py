import requests
import unittest

class TestHTTPResponse(unittest.TestCase):

    def test_URL_response(self):
        result = \
            requests.get('http://wwc.keywordcount.40133374.qpc.hal.davecutting.uk/')
        self.assertEqual(result.status_code, 200)


if __name__=='__main__':
    unittest.main()

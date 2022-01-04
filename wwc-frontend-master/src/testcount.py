import requests
import unittest

class TestHTTPResponse(unittest.TestCase):

    def test_URL_response_status(self):
        result = \
            requests.get('http://wwc.count.40133374.qpc.hal.davecutting.uk/')
        self.assertEqual(result.status_code, 200)


if __name__=='__main__':
    unittest.main()

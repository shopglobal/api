# coding: utf-8

"""
    Amadeus Travel Innovation Sandbox

    No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

    OpenAPI spec version: 1.2
    
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from pprint import pformat
from six import iteritems
import re


class ExtremeSearchResponse(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """


    """
    Attributes:
      swagger_types (dict): The key is attribute name
                            and the value is attribute type.
      attribute_map (dict): The key is attribute name
                            and the value is json key in definition.
    """
    swagger_types = {
        'origin': 'str',
        'currency': 'str',
        'results': 'list[ExtremeSearchResult]'
    }

    attribute_map = {
        'origin': 'origin',
        'currency': 'currency',
        'results': 'results'
    }

    def __init__(self, origin=None, currency=None, results=None):
        """
        ExtremeSearchResponse - a model defined in Swagger
        """

        self._origin = None
        self._currency = None
        self._results = None

        self.origin = origin
        self.currency = currency
        self.results = results

    @property
    def origin(self):
        """
        Gets the origin of this ExtremeSearchResponse.
        <a href=\"https://en.wikipedia.org/wiki/International_Air_Transport_Association_airport_code\">IATA code</a>

        :return: The origin of this ExtremeSearchResponse.
        :rtype: str
        """
        return self._origin

    @origin.setter
    def origin(self, origin):
        """
        Sets the origin of this ExtremeSearchResponse.
        <a href=\"https://en.wikipedia.org/wiki/International_Air_Transport_Association_airport_code\">IATA code</a>

        :param origin: The origin of this ExtremeSearchResponse.
        :type: str
        """
        if origin is None:
            raise ValueError("Invalid value for `origin`, must not be `None`")

        self._origin = origin

    @property
    def currency(self):
        """
        Gets the currency of this ExtremeSearchResponse.
        <a href=\"http://en.wikipedia.org/wiki/ISO_4217\">ISO 4217</a> currency code.

        :return: The currency of this ExtremeSearchResponse.
        :rtype: str
        """
        return self._currency

    @currency.setter
    def currency(self, currency):
        """
        Sets the currency of this ExtremeSearchResponse.
        <a href=\"http://en.wikipedia.org/wiki/ISO_4217\">ISO 4217</a> currency code.

        :param currency: The currency of this ExtremeSearchResponse.
        :type: str
        """
        if currency is None:
            raise ValueError("Invalid value for `currency`, must not be `None`")

        self._currency = currency

    @property
    def results(self):
        """
        Gets the results of this ExtremeSearchResponse.

        :return: The results of this ExtremeSearchResponse.
        :rtype: list[ExtremeSearchResult]
        """
        return self._results

    @results.setter
    def results(self, results):
        """
        Sets the results of this ExtremeSearchResponse.

        :param results: The results of this ExtremeSearchResponse.
        :type: list[ExtremeSearchResult]
        """
        if results is None:
            raise ValueError("Invalid value for `results`, must not be `None`")

        self._results = results

    def to_dict(self):
        """
        Returns the model properties as a dict
        """
        result = {}

        for attr, _ in iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value

        return result

    def to_str(self):
        """
        Returns the string representation of the model
        """
        return pformat(self.to_dict())

    def __repr__(self):
        """
        For `print` and `pprint`
        """
        return self.to_str()

    def __eq__(self, other):
        """
        Returns true if both objects are equal
        """
        if not isinstance(other, ExtremeSearchResponse):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other

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


class RestrictedRate(object):
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
        'rate_code': 'str',
        'rate_name': 'str',
        'restrictions': 'str'
    }

    attribute_map = {
        'rate_code': 'rate_code',
        'rate_name': 'rate_name',
        'restrictions': 'restrictions'
    }

    def __init__(self, rate_code=None, rate_name=None, restrictions=None):
        """
        RestrictedRate - a model defined in Swagger
        """

        self._rate_code = None
        self._rate_name = None
        self._restrictions = None

        self.rate_code = rate_code
        self.rate_name = rate_name
        self.restrictions = restrictions

    @property
    def rate_code(self):
        """
        Gets the rate_code of this RestrictedRate.
        The unique identifier of this rate.

        :return: The rate_code of this RestrictedRate.
        :rtype: str
        """
        return self._rate_code

    @rate_code.setter
    def rate_code(self, rate_code):
        """
        Sets the rate_code of this RestrictedRate.
        The unique identifier of this rate.

        :param rate_code: The rate_code of this RestrictedRate.
        :type: str
        """
        if rate_code is None:
            raise ValueError("Invalid value for `rate_code`, must not be `None`")

        self._rate_code = rate_code

    @property
    def rate_name(self):
        """
        Gets the rate_name of this RestrictedRate.
        The name used by the company to describe this rate.

        :return: The rate_name of this RestrictedRate.
        :rtype: str
        """
        return self._rate_name

    @rate_name.setter
    def rate_name(self, rate_name):
        """
        Sets the rate_name of this RestrictedRate.
        The name used by the company to describe this rate.

        :param rate_name: The rate_name of this RestrictedRate.
        :type: str
        """
        if rate_name is None:
            raise ValueError("Invalid value for `rate_name`, must not be `None`")

        self._rate_name = rate_name

    @property
    def restrictions(self):
        """
        Gets the restrictions of this RestrictedRate.
        An enumeration of the type of restrictions associated with this rate.

        :return: The restrictions of this RestrictedRate.
        :rtype: str
        """
        return self._restrictions

    @restrictions.setter
    def restrictions(self, restrictions):
        """
        Sets the restrictions of this RestrictedRate.
        An enumeration of the type of restrictions associated with this rate.

        :param restrictions: The restrictions of this RestrictedRate.
        :type: str
        """
        if restrictions is None:
            raise ValueError("Invalid value for `restrictions`, must not be `None`")

        self._restrictions = restrictions

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
        if not isinstance(other, RestrictedRate):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other
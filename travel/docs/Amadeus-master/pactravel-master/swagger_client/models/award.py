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


class Award(object):
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
        'provider': 'str',
        'rating': 'str'
    }

    attribute_map = {
        'provider': 'provider',
        'rating': 'rating'
    }

    def __init__(self, provider=None, rating=None):
        """
        Award - a model defined in Swagger
        """

        self._provider = None
        self._rating = None

        self.provider = provider
        self.rating = rating

    @property
    def provider(self):
        """
        Gets the provider of this Award.
        The organization that issued the award. For example&colon;. Local Star Rating, AAA.

        :return: The provider of this Award.
        :rtype: str
        """
        return self._provider

    @provider.setter
    def provider(self, provider):
        """
        Sets the provider of this Award.
        The organization that issued the award. For example&colon;. Local Star Rating, AAA.

        :param provider: The provider of this Award.
        :type: str
        """
        if provider is None:
            raise ValueError("Invalid value for `provider`, must not be `None`")

        self._provider = provider

    @property
    def rating(self):
        """
        Gets the rating of this Award.
        The level of the award that was awarded on the provider's scale. For example&colon; 4 or RECOMMENDED.

        :return: The rating of this Award.
        :rtype: str
        """
        return self._rating

    @rating.setter
    def rating(self, rating):
        """
        Sets the rating of this Award.
        The level of the award that was awarded on the provider's scale. For example&colon; 4 or RECOMMENDED.

        :param rating: The rating of this Award.
        :type: str
        """
        if rating is None:
            raise ValueError("Invalid value for `rating`, must not be `None`")

        self._rating = rating

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
        if not isinstance(other, Award):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other

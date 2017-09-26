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


class Vehicle(object):
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
        'vehicle_info': 'VehicleInfo',
        'rates': 'list[Rate]',
        'estimated_total': 'Amount',
        'images': 'list[Image]'
    }

    attribute_map = {
        'vehicle_info': 'vehicle_info',
        'rates': 'rates',
        'estimated_total': 'estimated_total',
        'images': 'images'
    }

    def __init__(self, vehicle_info=None, rates=None, estimated_total=None, images=None):
        """
        Vehicle - a model defined in Swagger
        """

        self._vehicle_info = None
        self._rates = None
        self._estimated_total = None
        self._images = None

        self.vehicle_info = vehicle_info
        if rates is not None:
          self.rates = rates
        if estimated_total is not None:
          self.estimated_total = estimated_total
        if images is not None:
          self.images = images

    @property
    def vehicle_info(self):
        """
        Gets the vehicle_info of this Vehicle.
        More information about the type of vehicle on offer.

        :return: The vehicle_info of this Vehicle.
        :rtype: VehicleInfo
        """
        return self._vehicle_info

    @vehicle_info.setter
    def vehicle_info(self, vehicle_info):
        """
        Sets the vehicle_info of this Vehicle.
        More information about the type of vehicle on offer.

        :param vehicle_info: The vehicle_info of this Vehicle.
        :type: VehicleInfo
        """
        if vehicle_info is None:
            raise ValueError("Invalid value for `vehicle_info`, must not be `None`")

        self._vehicle_info = vehicle_info

    @property
    def rates(self):
        """
        Gets the rates of this Vehicle.
        Rates that will be applied during the duration of the car rental requested. These rates are generally not inclusive of tax and are used by the car rental company to compute the total cost at the end of the rental period.

        :return: The rates of this Vehicle.
        :rtype: list[Rate]
        """
        return self._rates

    @rates.setter
    def rates(self, rates):
        """
        Sets the rates of this Vehicle.
        Rates that will be applied during the duration of the car rental requested. These rates are generally not inclusive of tax and are used by the car rental company to compute the total cost at the end of the rental period.

        :param rates: The rates of this Vehicle.
        :type: list[Rate]
        """

        self._rates = rates

    @property
    def estimated_total(self):
        """
        Gets the estimated_total of this Vehicle.
        The estimated total cost of the rental given the rental period and location provided, including all mandatory taxes and charges, and using a default set of rental options and restrictions defined by the car company.

        :return: The estimated_total of this Vehicle.
        :rtype: Amount
        """
        return self._estimated_total

    @estimated_total.setter
    def estimated_total(self, estimated_total):
        """
        Sets the estimated_total of this Vehicle.
        The estimated total cost of the rental given the rental period and location provided, including all mandatory taxes and charges, and using a default set of rental options and restrictions defined by the car company.

        :param estimated_total: The estimated_total of this Vehicle.
        :type: Amount
        """

        self._estimated_total = estimated_total

    @property
    def images(self):
        """
        Gets the images of this Vehicle.
        An image to give an indication of what to expect when renting this vehicle.

        :return: The images of this Vehicle.
        :rtype: list[Image]
        """
        return self._images

    @images.setter
    def images(self, images):
        """
        Sets the images of this Vehicle.
        An image to give an indication of what to expect when renting this vehicle.

        :param images: The images of this Vehicle.
        :type: list[Image]
        """

        self._images = images

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
        if not isinstance(other, Vehicle):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other

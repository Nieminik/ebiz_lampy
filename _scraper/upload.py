def ensure_response_structure(object_, object_name: str):  # object_name singular!!
    if not object_:
        # no objects found
        return []
    object_ = object_[object_name]
    if hasattr(object_, "items"):
        # single object found
        return [object_]
    # multiple objects found
    return object_
